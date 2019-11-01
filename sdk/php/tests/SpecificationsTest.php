<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Tests;

use Avtocod\Specifications\Specifications;
use Avtocod\Specifications\Structures\Field;
use Avtocod\Specifications\Structures\IdentifierType;
use Avtocod\Specifications\Structures\Source;
use Avtocod\Specifications\Structures\VehicleMark;
use Avtocod\Specifications\Structures\VehicleModel;
use Avtocod\Specifications\Structures\VehicleType;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;
use PackageVersions\Versions;
use ReflectionClass;
use ReflectionMethod;
use Tarampampam\Wrappers\Json;

/**
 * @coversDefaultClass \Avtocod\Specifications\Specifications
 */
class SpecificationsTest extends AbstractTestCase
{
    /**
     * @var Specifications
     */
    protected $instance;

    /**
     * @var Validator
     */
    protected $validator;

    /**
     * {@inheritdoc}
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->validator = new Validator;
        $this->instance  = new Specifications;
    }

    /**
     * Test constants.
     *
     * @return void
     */
    public function testConstants(): void
    {
        $this->assertEquals('default', Specifications::GROUP_NAME_DEFAULT);
    }

    /**
     * @return void
     */
    public function testGetRootDirectoryPath(): void
    {
        $this->assertEquals($this->instance::getRootDirectoryPath(), $root = $this->getRootDirPath());
        $this->assertEquals($this->instance::getRootDirectoryPath('foo'), $root . DIRECTORY_SEPARATOR . 'foo');
        $this->assertEquals($this->instance::getRootDirectoryPath(' /foo'), $root . DIRECTORY_SEPARATOR . 'foo');
    }

    /**
     * @return void
     */
    public function testGetFieldsSpecification(): void
    {
        $fillable_by_should_be_empty_for = [
            'tech_data.manufacturer.name',
            'tech_data.brand.name.rus',
            'tech_data.transmission.type',
            'calculate.tax.moscow.yearly.amount',
            'calculate.tax.regions.yearly.amount',
            'utilizations.items[].org.name',
            'utilizations.items[].country.name',
        ];

        foreach (['default', null] as $group_name) {
            $result  = $this->instance::getFieldsSpecification($group_name);
            $sources = $this->instance::getSourcesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(Field::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/fields/default/fields_list.json'
                ))
            );

            $this->assertCount(\count($raw), $result);
            $patches = [];

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

                if (\in_array($path, $fillable_by_should_be_empty_for, true)) {
                    $this->assertEmpty($fillable_by, "Path {$path} should have empty 'fillable_by' attribute");
                } else {
                    $this->assertNotEmpty($fillable_by, "Path {$path} has empty 'fillable_by' attribute");
                }

                $fillable_sources = [];

                foreach ($fillable_by as $source) {
                    $this->assertTrue($sources->contains('name', $source),
                        "Path [{$path}] contains invalid source [{$source}]");
                    $this->assertNotContains($source, $fillable_sources,
                        "Path [{$path}] contains source duplicate: {$source}");
                    $fillable_sources[] = $source;
                }

                $this->assertNotContains($path, $patches, "Fields specification contains field duplicate: {$path}");
                $patches[] = $path;
            }
        }
    }

    /**
     * @return void
     */
    public function testGetFieldsJsonSchema(): void
    {
        foreach (['default', null] as $group_name) {
            $this->assertInternalType('object', $as_object = $this->instance::getFieldsJsonSchema($group_name));
            $this->assertInternalType('array', $this->instance::getFieldsJsonSchema($group_name, true));

            $this->assertStringStartsWith(
                'https://github.com/avtocod/specs/blob/master/fields/default/json-schema.json',
                (new Schema($as_object))->id()
            );
        }
    }

    /**
     * @return void
     */
    public function testFieldsJsonSchemaValidation(): void
    {
        $fields_raw = Json::decode(\file_get_contents(
            $this->instance::getRootDirectoryPath('/fields/default/fields_list.json')
        ), false);

        $this->assertTrue($this->validator->schemaValidation(
            $fields_raw, new Schema($this->instance::getFieldsJsonSchema('default'))
        )->isValid());
    }

    /**
     * @return void
     */
    public function testGetReportExample(): void
    {
        foreach (['default', null] as $group_name) {
            foreach (['full', 'empty'] as $name) {
                $result = $this->instance::getReportExample($group_name, $name);
                $this->assertInternalType('array', $result);

                $raw = Json::decode(
                    \file_get_contents($this->instance::getRootDirectoryPath(
                        "/reports/default/examples/{$name}.json"
                    ))
                );

                $this->assertEquals($result, $raw);
            }
        }
    }

    /**
     * @return void
     */
    public function testGetReportExampleWithInvalidGroupName(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getReportExample('foo bar');
    }

    /**
     * @return void
     */
    public function testGetReportJsonSchema(): void
    {
        foreach (['default', null] as $group_name) {
            $this->assertInternalType('object', $as_object = $this->instance::getReportJsonSchema($group_name));
            $this->assertInternalType('array', $this->instance::getReportJsonSchema($group_name, true));

            $this->assertStringStartsWith(
                'https://github.com/avtocod/specs/blob/master/reports/default/json-schema.json',
                (new Schema($as_object))->id()
            );
        }
    }

    /**
     * @return void
     */
    public function testReportExamplesUsingSchemaValidator(): void
    {
        foreach (['default', null] as $group_name) {
            foreach (['full', 'empty'] as $report_example_type) {
                $report_example = $this->instance::getReportExample($group_name, $report_example_type, false);

                $this->assertTrue(
                    $this->validator->schemaValidation(
                        $report_example,
                        new Schema($this->instance::getReportJsonSchema($group_name))
                    )->isValid()
                );
            }
        }
    }

    /**
     * @return void
     */
    public function testGetIdentifierTypesSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getIdentifierTypesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(IdentifierType::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/identifiers/default/types_list.json'
                ))
            );

            $this->assertCount(\count($raw), $result);
            $types = [];

            foreach ($raw as $identifier_data) {
                $type = $identifier_data['type'];

                $this->assertEquals($identifier_data['description'], $result[$type]->getDescription());
                $this->assertEquals($identifier_data['type'], $result[$type]->getType());
                $this->assertNotContains($type, $types, "Identifier type contains duplicate: {$type}");
                $types[] = $type;
            }
        }
    }

    /**
     * Test `getIdentifierTypesSpecification()` method exception throwing.
     *
     * @return void
     */
    public function testGetIdentifierTypesSpecificationWithInvalidGroupName(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getIdentifierTypesSpecification('foo bar');
    }

    /**
     * @return void
     */
    public function testGetIdentifierTypesJsonSchema(): void
    {
        foreach (['default', null] as $group_name) {
            $this->assertInternalType(
                'object',
                $as_object = $this->instance::getIdentifierTypesJsonSchema($group_name)
            );
            $this->assertInternalType(
                'array',
                $this->instance::getIdentifierTypesJsonSchema($group_name, true)
            );

            $this->assertStringStartsWith(
                'https://github.com/avtocod/specs/blob/master/identifiers/default/json-schema.json',
                (new Schema($as_object))->id()
            );
        }
    }

    /**
     * @return void
     */
    public function testIdentifierTypesUsingSchemaValidator(): void
    {
        foreach (['default', null] as $group_name) {
            $identifier_types = Json::decode(\file_get_contents($this->instance::getRootDirectoryPath(
                '/identifiers/default/types_list.json'
            )), false);

            $this->assertTrue(
                $this->validator->schemaValidation(
                    $identifier_types,
                    new Schema($this->instance::getIdentifierTypesJsonSchema($group_name))
                )->isValid()
            );
        }
    }

    /**
     * @covers ::version
     *
     * @return void
     */
    public function testVersion(): void
    {
        $this->assertSame(
            $version = Versions::getVersion($this->instance::SELF_PACKAGE_NAME),
            $this->instance::version(false)
        );

        $this->assertSame(\mb_substr($version, 0, (int) \mb_strpos($version, '@')), $this->instance::version());
    }

    /**
     * @return void
     */
    public function testFieldsListAndReportSchemaAreSame(): void
    {
        $fields = $this->instance::getFieldsSpecification();
        $schema = $this->instance::getReportJsonSchema(null, true);

        foreach ($fields as $field) {
            $schema_path = [];

            foreach ($field->getPathParts() as $path_part) {
                $schema_path[] = 'properties';

                if (Str::contains($path_part, Field::NESTING_SIGNATURE)) {
                    $schema_path[] = \str_replace(Field::NESTING_SIGNATURE, '', $path_part);
                    $schema_path[] = 'items';
                } else {
                    $schema_path[] = $path_part;
                }
            }

            $schema_field_data = Arr::get($schema, $schema_path = \implode('.', $schema_path));

            $this->assertNotEmpty($schema_field_data);
            $this->assertNotEmpty($schema_field_data['description'],
                "Schema field with path {$schema_path}.description should be not empty");

            $this->assertContains(
                $schema_field_data['description'],
                $field->getDescription(),
                "Schema should contains same 'description' for field with path {$field->getPath()} (from 'fields_list.json' file)"
            );

            foreach ($field->getFillableBy() as $source_name) {
                $this->assertNotEmpty($schema_field_data['fillable_by'], "'fillable_by' in {$schema_path} is empty");

                $this->assertContains(
                    $source_name,
                    $schema_field_data['fillable_by'],
                    "Schema should contains same 'fillable_by' for field with path {$field->getPath()} (from 'fields_list.json' file)"
                );
            }
        }
    }

    /**
     * @return void
     */
    public function testGetFieldsSpecificationWithInvalidGroupName(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getFieldsSpecification('foo bar');
    }

    /**
     * @return void
     */
    public function testGetSourcesSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getSourcesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(Source::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/sources/default/sources_list.json'
                ))
            );

            $this->assertCount(\count($raw), $result);
            $names = [];

            foreach ($raw as $source_data) {
                $name = $source_data['name'];

                $this->assertEquals($source_data['name'], $result[$name]->getName());
                $this->assertEquals($source_data['description'], $result[$name]->getDescription());
                $this->assertNotContains($name, $names, "Sources names contains duplicate: {$name}");
                $names[] = $name;
            }
        }
    }

    /**
     * @return void
     */
    public function testGetSourcesJsonSchema(): void
    {
        foreach (['default', null] as $group_name) {
            $this->assertInternalType(
                'object',
                $as_object = $this->instance::getSourcesJsonSchema($group_name)
            );
            $this->assertInternalType(
                'array',
                $this->instance::getSourcesJsonSchema($group_name, true)
            );

            $this->assertStringStartsWith(
                'https://github.com/avtocod/specs/blob/master/sources/default/json-schema.json',
                (new Schema($as_object))->id()
            );
        }
    }

    /**
     * @return void
     */
    public function testSourcesUsingSchemaValidator(): void
    {
        foreach (['default', null] as $group_name) {
            $identifier_types = Json::decode(\file_get_contents($this->instance::getRootDirectoryPath(
                '/sources/default/sources_list.json'
            )), false);

            $this->assertTrue(
                $this->validator->schemaValidation(
                    $identifier_types,
                    new Schema($this->instance::getSourcesJsonSchema($group_name))
                )->isValid()
            );
        }
    }

    /**
     * @return void
     */
    public function testGetVehiclesMarksSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getVehicleMarksSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(VehicleMark::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/vehicles/default/marks.json'
                ))
            );

            $this->assertCount(count($raw), $result);
            $mark_ids = [];

            foreach ($raw as $source_data) {
                $mark_id = $source_data['id'];

                $this->assertEquals($source_data['id'], $result[$mark_id]->getId());
                $this->assertEquals($source_data['name'], $result[$mark_id]->getName());
                $this->assertNotContains($mark_id, $mark_ids, "Mark ID contains duplicate: {$mark_id}");
                $mark_ids[] = $mark_id;
            }
        }
    }

    /**
     * @return void
     */
    public function testGetVehicleModelsSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getVehicleModelsSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(VehicleModel::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/vehicles/default/models.json'
                ))
            );

            $this->assertCount(count($raw), $result);
            $model_ids = [];

            foreach ($raw as $source_data) {
                $model_id = $source_data['id'];

                $this->assertEquals($source_data['id'], $result[$model_id]->getId());
                $this->assertEquals($source_data['name'], $result[$model_id]->getName());
                $this->assertEquals($source_data['mark_id'], $result[$model_id]->getMarkId());
                $this->assertNotContains($model_id, $model_ids, "Model ID contains duplicate: {$model_id}");
                $model_ids[] = $model_id;
            }
        }
    }

    /**
     * @return void
     */
    public function testGetVehicleModelsByTypeSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            foreach ($this->getVehicleTypeAliasByIdMap() as $vehicle_type => $alias) {
                $result = $this->instance::getVehicleModelsSpecification($group_name, $vehicle_type);
                $this->assertInstanceOf(Collection::class, $result);
                foreach ($result as $item) {
                    $this->assertInstanceOf(VehicleModel::class, $item);
                }
                if ($vehicle_type === Specifications::VEHICLE_TYPE_DEFAULT) {
                    $path_file = '/vehicles/default/models.json';
                } else {
                    $path_file = sprintf('/vehicles/default/models_%s.json', $alias);
                }
                $raw       = Json::decode(
                    \file_get_contents($this->instance::getRootDirectoryPath($path_file))
                );
                $this->assertCount(count($raw), $result);
                $model_ids = [];
                foreach ($raw as $source_data) {
                    $model_id = $source_data['id'];
                    $this->assertEquals($source_data['id'], $result[$model_id]->getId());
                    $this->assertEquals($source_data['name'], $result[$model_id]->getName());
                    $this->assertEquals($source_data['mark_id'], $result[$model_id]->getMarkId());
                    $this->assertNotContains($model_id, $model_ids, "Model ID contains duplicate: {$model_id}");
                    $model_ids[] = $model_id;
                }
            }
        }
    }

    /**
     * @return void
     */
    public function testGetVehicleModelsByTypeSpecificationException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown vehicle type identifier [UNKNOWN]');

        $this->instance::getVehicleModelsSpecification(null, 'UNKNOWN');
    }

    /**
     * @return void
     */
    public function testGetVehicleTypeAliasById(): void
    {
        $method_name = 'getVehicleTypeAliasById';
        $method      = $this->getNonPublicMethod(get_class($this->instance), $method_name);

        foreach (['default', null] as $group_name) {
            foreach ($this->getVehicleTypeAliasByIdMap() as $id => $alias) {
                $this->assertSame($alias, $method->invokeArgs($this->instance, [$id, $group_name]));
            }
        }
    }

    /**
     * @return void
     */
    public function testGetVehicleTypeAliasByIdException(): void
    {
        $method_name = 'getVehicleTypeAliasById';
        $method      = $this->getNonPublicMethod(get_class($this->instance), $method_name);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown vehicle type identifier [UNKNOWN]');

        $method->invokeArgs($this->instance, ['UNKNOWN', null]);
    }

    public function testGetVehicleModelsSpecificationFilePath(): void
    {
        $method_name = 'getVehicleModelsSpecificationFilePath';
        $method      = $this->getNonPublicMethod(get_class($this->instance), $method_name);

        foreach (['default', 'custom'] as $group_name) {
            foreach ($this->getVehicleModelsFilePathByTypeId($group_name) as $id => $path) {
                $this->assertSame($path, $method->invokeArgs($this->instance, [$id, $group_name]));
            }
        }
    }

    public function testGetVehicleModelsSpecificationFilePathException(): void
    {
        $method_name = 'getVehicleModelsSpecificationFilePath';
        $method      = $this->getNonPublicMethod(get_class($this->instance), $method_name);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unknown vehicle type identifier [UNKNOWN]');

        $method->invokeArgs($this->instance, ['UNKNOWN', 'default']);
    }

    /**
     * @return void
     */
    public function testGetVehicleTypesSpecification(): void
    {
        foreach (['default', null] as $group_name) {
            $result = $this->instance::getVehicleTypesSpecification($group_name);
            $this->assertInstanceOf(Collection::class, $result);

            foreach ($result as $item) {
                $this->assertInstanceOf(VehicleType::class, $item);
            }

            $raw = Json::decode(
                \file_get_contents($this->instance::getRootDirectoryPath(
                    '/vehicles/default/types.json'
                ))
            );

            $this->assertCount(count($raw), $result);
            $types_ids = [];

            foreach ($raw as $source_data) {
                $type_id = $source_data['id'];

                $this->assertEquals($source_data['id'], $result[$type_id]->getId());
                $this->assertEquals($source_data['name'], $result[$type_id]->getName());
                $this->assertNotContains($type_id, $types_ids, "Model type ID contains duplicate: {$type_id}");
                $types_ids[] = $type_id;
            }
        }
    }

    /**
     * @return void
     */
    public function testGetSourcesSpecificationWithInvalidGroupName(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~file.+was not found~i');

        $this->instance::getSourcesSpecification('foo bar');
    }

    /**
     * @return void
     */
    public function testGetJsonFileContent(): void
    {
        $method_name = 'getJsonFileContent';
        $method      = $this->getNonPublicMethod(get_class($this->instance), $method_name);

        $path = $this->instance::getRootDirectoryPath('/vehicles/default/types.json');
        $this->assertInternalType('array', $method->invokeArgs($this->instance, [$path, true]));
        $this->assertInternalType('object', $method->invokeArgs($this->instance, [$path, false]));

        $wrong_path = $this->instance::getRootDirectoryPath('/not_exists.json');
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("File [{$wrong_path}] was not found");
        $method->invokeArgs($this->instance, [$wrong_path, true]);
    }

    /**
     * Return vehicle type aliases mapped to vehicle type ids.
     *
     * @return array
     */
    protected function getVehicleTypeAliasByIdMap(): array
    {
        return [
            'ID_TYPE_AGRICULTURAL' => 'agricultural',
            'ID_TYPE_ARTIC'        => 'artic',
            'ID_TYPE_ATV'          => 'atv',
            'ID_TYPE_AUTOLOADER'   => 'autoloader',
            'ID_TYPE_BULLDOZER'    => 'bulldozer',
            'ID_TYPE_BUS'          => 'bus',
            'ID_TYPE_CAR'          => 'car',
            'ID_TYPE_CONSTRUCTION' => 'construction',
            'ID_TYPE_CRANE'        => 'crane',
            'ID_TYPE_SELF_LOADER'  => 'self_loader',
            'ID_TYPE_DREDGE'       => 'dredge',
            'ID_TYPE_LIGHT_TRUCK'  => 'light_truck',
            'ID_TYPE_MOTORCYCLE'   => 'motorcycle',
            'ID_TYPE_MUNICIPAL'    => 'municipal',
            'ID_TYPE_SCOOTER'      => 'scooter',
            'ID_TYPE_SNOWMOBILE'   => 'snowmobile',
            'ID_TYPE_TRAILER'      => 'trailer',
            'ID_TYPE_TRUCK'        => 'truck',
        ];
    }

    /**
     * Return vehicle models specs files paths mapped to vehicle type id.
     *
     * @example
     * [
     *      ...
     *      'ID_TYPE_CAR' => '/vehicles/default/models.json',
     *      'ID_TYPE_SCOOTER' => '/vehicles/default/models_scooter.json',
     *      ...
     * ]
     *
     * @param string $group_name
     *
     * @return array
     */
    protected function getVehicleModelsFilePathByTypeId($group_name = null): array
    {
        $group_name = $group_name ?? 'default';

        $alias_map = $this->getVehicleTypeAliasByIdMap();

        $file_paths = [];

        foreach ($alias_map as $id => $alias) {
            if ($id === Specifications::VEHICLE_TYPE_DEFAULT) {
                $file_paths[$id] = "/vehicles/{$group_name}/models.json";
            } else {
                $file_paths[$id] = "/vehicles/{$group_name}/models_{$alias}.json";
            }
        }

        return $file_paths;
    }

    /**
     * Make accessible non public method and return it.
     *
     * @param string $class_name
     * @param string $method_name
     *
     * @return ReflectionMethod
     */
    protected function getNonPublicMethod($class_name, $method_name): ReflectionMethod
    {
        $class  = new ReflectionClass($class_name);
        $method = $class->getMethod($method_name);
        $method->setAccessible(true);

        return $method;
    }
}
