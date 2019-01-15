<?php

declare(strict_types=1);

namespace Avtocod\Specifications;

use Exception;
use Opis\JsonSchema\Schema;
use JsonSchema\SchemaStorage;
use InvalidArgumentException;
use Tarampampam\Wrappers\Json;
use Illuminate\Support\Collection;
use Avtocod\Specifications\Structures\Field;
use Avtocod\Specifications\Structures\Source;
use Avtocod\Specifications\Structures\VehicleMark;
use Avtocod\Specifications\Structures\VehicleModel;
use Avtocod\Specifications\Structures\IdentifierType;
use Tarampampam\Wrappers\Exceptions\JsonEncodeDecodeException;

class Specifications
{
    /**
     * Default specification group name.
     */
    const GROUP_NAME_DEFAULT = 'default';

    /**
     * Get the specifications root directory path.
     *
     * @param string|null $additional_path
     *
     * @return string
     */
    public static function getRootDirectoryPath(string $additional_path = null): string
    {
        $root = \dirname(__DIR__, 3);

        return $additional_path !== null
            ? $root . DIRECTORY_SEPARATOR . ltrim($additional_path, ' \\/')
            : $root;
    }

    /**
     * Get fields specification as collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|Field[]
     */
    public static function getFieldsSpecification(string $group_name = null): Collection
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        $result = new Collection;
        $input  = static::getJsonFileAsArray(
            static::getRootDirectoryPath("/fields/{$group_name}/fields_list.json")
        );

        foreach ($input as $field_data) {
            $result->push(new Field($field_data));
        }

        return $result;
    }

    /**
     * Get report schema as an array.
     *
     * @param string|null $group_name
     * @param string      $schema_format
     *
     * @return array
     */
    public static function getFieldsSchema(string $group_name = null, string $schema_format = 'json-schema'): array
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath("/fields/{$group_name}/schemas/{$schema_format}/fields.json")
        );
    }

    /**
     * Get report example.
     *
     * @param string|null $group_name
     * @param string      $name
     *
     * @return array
     */
    public static function getReportExample(string $group_name = null, string $name = 'full'): array
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath("/fields/{$group_name}/examples/{$name}.json")
        );
    }

    /**
     * Get identifier types specification as collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|IdentifierType[]
     */
    public static function getIdentifierTypesSpecification(string $group_name = null): Collection
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        $result = new Collection;
        $input  = static::getJsonFileAsArray(
            static::getRootDirectoryPath("/identifiers/{$group_name}/types_list.json")
        );

        foreach ($input as $source_data) {
            $result->put($source_data['type'], new IdentifierType($source_data));
        }

        return $result;
    }

    /**
     * Get sources specification as collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|Source[]
     */
    public static function getSourcesSpecification(string $group_name = null): Collection
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        $result = new Collection;
        $input  = static::getJsonFileAsArray(
            static::getRootDirectoryPath("/sources/{$group_name}/sources_list.json")
        );

        foreach ($input as $source_data) {
            $result->put($source_data['name'], new Source($source_data));
        }

        return $result;
    }

    /**
     * Get vehicle marks specification as collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|VehicleMark[]
     */
    public static function getVehicleMarksSpecification(string $group_name = null): Collection
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        $result = new Collection;
        $input  = static::getJsonFileAsArray(
            static::getRootDirectoryPath("/vehicles/{$group_name}/marks.json")
        );

        foreach ($input as $source_data) {
            $result->put($source_data['id'], new VehicleMark($source_data));
        }

        return $result;
    }

    /**
     * Get vehicle models specification as collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|VehicleModel[]
     */
    public static function getVehicleModelsSpecification(string $group_name = null): Collection
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        $result = new Collection;
        $input  = static::getJsonFileAsArray(
            static::getRootDirectoryPath("/vehicles/{$group_name}/models.json")
        );

        foreach ($input as $source_data) {
            $result->put($source_data['id'], new VehicleModel($source_data));
        }

        return $result;
    }

    /**
     * Get json-file content as an array.
     *
     * @param string $file_path
     *
     * @throws InvalidArgumentException
     * @throws JsonEncodeDecodeException
     *
     * @return array
     */
    protected static function getJsonFileAsArray(string $file_path): array
    {
        if (! \is_file($file_path)) {
            throw new \InvalidArgumentException("File [{$file_path}] was not found");
        }

        return (array) Json::decode((string) \file_get_contents($file_path), true);
    }
}
