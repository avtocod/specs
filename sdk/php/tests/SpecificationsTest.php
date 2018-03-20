<?php

namespace Avtocod\Specifications\Tests;

use Exception;
use Avtocod\Specifications\Specifications;

/**
 * Class SpecificationsTest.
 */
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
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->instance);

        parent::tearDown();
    }

    /**
     * Тест констант.
     *
     * @return void
     */
    public function testConstants()
    {
        $this->assertEquals('default', Specifications::GROUP_NAME_DEFAULT);
    }

    /**
     * Тест метода, возвращающего базовый путь к директории спецификаций.
     *
     * @return void
     */
    public function testGetRootDirectoryPath()
    {
        $this->assertEquals($this->instance->getRootDirectoryPath(), $root = $this->getRootDirPath());
        $this->assertEquals($this->instance->getRootDirectoryPath('foo'), $root . DIRECTORY_SEPARATOR . 'foo');
        $this->assertEquals($this->instance->getRootDirectoryPath(' /foo'), $root . DIRECTORY_SEPARATOR . 'foo');
        $this->assertEquals($this->instance->getRootDirectoryPath(new \stdClass), $root);
        $this->assertEquals($this->instance->getRootDirectoryPath([]), $root);
    }

    /**
     * Тест метода, возвращающего филды спецификации.
     *
     * @return void
     */
    public function testGetFieldsSpecification()
    {
        $this->assertEquals(
            json_decode(
                file_get_contents($this->instance->getRootDirectoryPath(
                    '/fields/default/fields_list.json'
                )),
                true
            ),
            $this->instance->getFieldsSpecification('default')
        );
    }

    /**
     * Тест метода, возвращающего филды спецификации, с передачей ему не существующей группы.
     *
     * @return void
     */
    public function testGetFieldsSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);

        $this->instance->getFieldsSpecification('foo bar');
    }

    /**
     * Тест метода, возвращающего ипецификации по идентификаторам.
     *
     * @return void
     */
    public function testGetIdentifiersSpecification()
    {
        $this->assertEquals(
            json_decode(
                file_get_contents($this->instance->getRootDirectoryPath(
                    '/identifiers/default/identifiers_types_list.json'
                )),
                true
            ),
            $this->instance->getIdentifiersSpecification('default')
        );
    }

    /**
     * Тест метода, возвращающего ипецификации по идентификаторам, с передачей ему не существующей группы.
     *
     * @return void
     */
    public function testGetIdentifiersSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);

        $this->instance->getIdentifiersSpecification('foo bar');
    }

    /**
     * Тест метода, возвращающего ипецификации по источникам.
     *
     * @return void
     */
    public function testGetSourcesSpecification()
    {
        $this->assertEquals(
            json_decode(
                file_get_contents($this->instance->getRootDirectoryPath(
                    '/sources/default/sources_list.json'
                )),
                true
            ),
            $this->instance->getSourcesSpecification('default')
        );
    }

    /**
     * Тест метода, возвращающего ипецификации по источникам, с передачей ему не существующей группы.
     *
     * @return void
     */
    public function testGetSourcesSpecificationWithInvalidGroupName()
    {
        $this->expectException(Exception::class);

        $this->instance->getSourcesSpecification('foo bar');
    }
}
