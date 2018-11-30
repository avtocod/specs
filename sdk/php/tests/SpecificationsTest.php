<?php

namespace Avtocod\Specifications\Tests;

use Exception;
use Illuminate\Support\Collection;
use Avtocod\Specifications\Specifications;
use Avtocod\Specifications\Structures\Field;
use Avtocod\Specifications\Structures\Source;
use Avtocod\Specifications\Structures\VehicleMark;
use Avtocod\Specifications\Structures\VehicleModel;
use Avtocod\Specifications\Structures\IdentifierType;

class SpecificationsTest extends AbstractTestCase
{
    /**
     * @var Specifications
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->instance = new Specifications;
    }

    /**
     * Test constants.
     *
     * @return void
     */
    public function testConstants()
    {
        $this->assertEquals('default', Specifications::GROUP_NAME_DEFAULT);
    }

    /**
     * Test `getRootDirectoryPath()` method.
     *
     * @return void
     */
    public function testGetRootDirectoryPath()
    {
        $this->assertEquals($this->instance::getRootDirectoryPath(), $root = $this->getRootDirPath());
        $this->assertEquals($this->instance::getRootDirectoryPath('foo'), $root . DIRECTORY_SEPARATOR . 'foo');
        $this->assertEquals($this->instance::getRootDirectoryPath(' /foo'), $root . DIRECTORY_SEPARATOR . 'foo');
    }

    /**
     * Test `getFieldsSpecification()` method.
     *
     * @return void
     */
    public function testGetFieldsSpecification()
    {
        foreach (['default', null] as $group_name) {
            $result  = $this->instance::getFieldsSpecification($group_name);
            $sources = $this->instance::getSourcesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(Field::class, $item);
            }

            $raw = \json_decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/fields/default/fields_list.json'
                )),
                true
            );

            $this->assertCount(\count($raw), $result);

            foreach ($raw as $i => $field_data) {
                $this->assertEquals($path = $field_data['path'], $result[$i]->getPath());
                $this->assertEquals($field_data['description'], $result[$i]->getDescription());
                $this->assertEquals($field_data['types'], $result[$i]->getTypes());
                $this->assertEquals(
                    $fillable_by = $field_data['fillable_by'],
                    $result[$i]->getFillableBy(),
                    "{$path} has no 'fillable_by' attribute"
                );

                $this->assertInternalType('array', $fillable_by);

                // @todo: uncomment below after review
                // $this->assertNotEmpty($fillable_by, "Path {$path} has empty 'fillable_by' attribute");

                foreach ($fillable_by as $source) {
                    $this->assertTrue($sources->contains('name', $source));
                }
            }
        }
    }

    /**
     * Test `getFieldsSpecification()` method exception throwing.
     *
     * @return void
     */
    public function testGetFieldsSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getFieldsSpecification('foo bar');
    }

    /**
     * Test `getReportExample()` method.
     *
     * @return void
     */
    public function testGetReportExample()
    {
        foreach (['default', null] as $group_name) {
            foreach (['full', 'empty'] as $name) {
                $result = $this->instance::getReportExample($group_name, $name);
                $this->assertInternalType('array', $result);

                $raw = \json_decode(
                    \file_get_contents($this->instance::getRootDirectoryPath(
                        "/fields/default/examples/{$name}.json"
                    )),
                    true
                );

                $this->assertEquals($result, $raw);
            }
        }
    }

    /**
     * Test `getFieldsSpecification()` method exception throwing.
     *
     * @return void
     */
    public function testGetReportExampleWithInvalidGroupName()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getReportExample('foo bar');
    }

    /**
     * Test `getIdentifierTypesSpecification()` method.
     *
     * @return void
     */
    public function testGetIdentifierTypesSpecification()
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getIdentifierTypesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(IdentifierType::class, $item);
            }

            $raw = \json_decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/identifiers/default/types_list.json'
                )),
                true
            );

            $this->assertCount(\count($raw), $result);

            foreach ($raw as $identifier_data) {
                $identifier_type = $identifier_data['type'];

                $this->assertEquals($identifier_data['description'], $result[$identifier_type]->getDescription());
                $this->assertEquals($identifier_data['type'], $result[$identifier_type]->getType());
            }
        }
    }

    /**
     * Test `getIdentifierTypesSpecification()` method exception throwing.
     *
     * @return void
     */
    public function testGetIdentifierTypesSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getIdentifierTypesSpecification('foo bar');
    }

    /**
     * Test `getSourcesSpecification()` method.
     *
     * @return void
     */
    public function testGetSourcesSpecification()
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getSourcesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(Source::class, $item);
            }

            $raw = \json_decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/sources/default/sources_list.json'
                )),
                true
            );

            $this->assertCount(\count($raw), $result);

            foreach ($raw as $source_data) {
                $source_name = $source_data['name'];

                $this->assertEquals($source_data['name'], $result[$source_name]->getName());
                $this->assertEquals($source_data['description'], $result[$source_name]->getDescription());
            }
        }
    }

    /**
     * Test `getVehicleMarksSpecification()` method.
     *
     * @return void
     */
    public function testGetVehiclesMarksSpecification()
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getVehicleMarksSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(VehicleMark::class, $item);
            }

            $raw = \json_decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/vehicles/default/marks.json'
                )),
                true
            );

            $this->assertCount(count($raw), $result);

            foreach ($raw as $source_data) {
                $mark_id = $source_data['id'];

                $this->assertEquals($source_data['id'], $result[$mark_id]->getId());
                $this->assertEquals($source_data['name'], $result[$mark_id]->getName());
            }
        }
    }

    /**
     * Test `getVehicleModelsSpecification()` method.
     *
     * @return void
     */
    public function testGetVehicleModelsSpecification()
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getVehicleModelsSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(VehicleModel::class, $item);
            }

            $raw = \json_decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/vehicles/default/models.json'
                )),
                true
            );

            $this->assertCount(count($raw), $result);

            foreach ($raw as $source_data) {
                $mark_id = $source_data['id'];

                $this->assertEquals($source_data['id'], $result[$mark_id]->getId());
                $this->assertEquals($source_data['name'], $result[$mark_id]->getName());
                $this->assertEquals($source_data['mark_id'], $result[$mark_id]->getMarkId());
            }
        }
    }

    /**
     * Test `getSourcesSpecification()` method exception throwing.
     *
     * @return void
     */
    public function testGetSourcesSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getSourcesSpecification('foo bar');
    }
}
