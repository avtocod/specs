<?php

declare(strict_types=1);

namespace Avtocod\Specifications;

use Exception;
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
            ? $root . DIRECTORY_SEPARATOR . \ltrim($additional_path, ' \\/')
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
        $input  = static::getJsonFileContent(
            static::getRootDirectoryPath("/fields/{$group_name}/fields_list.json")
        );

        foreach ((array) $input as $field_data) {
            $result->push(new Field($field_data));
        }

        return $result;
    }

    /**
     * Get fields json-schema.
     *
     * @param string|null $group_name
     * @param bool        $as_array
     *
     * @return object|array
     */
    public static function getFieldsJsonSchema(string $group_name = null, bool $as_array = false)
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileContent(
            static::getRootDirectoryPath("/fields/{$group_name}/json-schema.json"), $as_array
        );
    }

    /**
     * Get report example.
     *
     * @param string|null $group_name
     * @param string      $name       Available values: `full` or `empty`
     * @param bool        $as_array
     *
     * @return array|object
     */
    public static function getReportExample(string $group_name = null, string $name = 'full', bool $as_array = true)
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileContent(
            static::getRootDirectoryPath("/reports/{$group_name}/examples/{$name}.json"), $as_array
        );
    }

    /**
     * Get report json-schema.
     *
     * @param string|null $group_name
     * @param bool        $as_array
     *
     * @return object|array
     */
    public static function getReportJsonSchema(string $group_name = null, bool $as_array = false)
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileContent(
            static::getRootDirectoryPath("/reports/{$group_name}/json-schema.json"), $as_array
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
        $input  = static::getJsonFileContent(
            static::getRootDirectoryPath("/identifiers/{$group_name}/types_list.json")
        );

        foreach ((array) $input as $source_data) {
            $result->put($source_data['type'], new IdentifierType($source_data));
        }

        return $result;
    }

    /**
     * Get identifier types json-schema.
     *
     * @param string|null $group_name
     * @param bool        $as_array
     *
     * @return object|array
     */
    public static function getIdentifierTypesJsonSchema(string $group_name = null, bool $as_array = false)
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileContent(
            static::getRootDirectoryPath("/identifiers/{$group_name}/json-schema.json"), $as_array
        );
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
        $input  = static::getJsonFileContent(
            static::getRootDirectoryPath("/sources/{$group_name}/sources_list.json")
        );

        foreach ((array) $input as $source_data) {
            $result->put($source_data['name'], new Source($source_data));
        }

        return $result;
    }

    /**
     * Get sources json-schema.
     *
     * @param string|null $group_name
     * @param bool        $as_array
     *
     * @return object|array
     */
    public static function getSourcesJsonSchema(string $group_name = null, bool $as_array = false)
    {
        $group_name = $group_name ?? self::GROUP_NAME_DEFAULT;

        return static::getJsonFileContent(
            static::getRootDirectoryPath("/sources/{$group_name}/json-schema.json"), $as_array
        );
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
        $input  = static::getJsonFileContent(
            static::getRootDirectoryPath("/vehicles/{$group_name}/marks.json")
        );

        foreach ((array) $input as $source_data) {
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
        $input  = static::getJsonFileContent(
            static::getRootDirectoryPath("/vehicles/{$group_name}/models.json")
        );

        foreach ((array) $input as $source_data) {
            $result->put($source_data['id'], new VehicleModel($source_data));
        }

        return $result;
    }

    /**
     * Get json-file content as an array.
     *
     * @param string $file_path
     * @param bool   $as_array
     *
     * @throws InvalidArgumentException
     * @throws JsonEncodeDecodeException
     *
     * @return array|object
     */
    protected static function getJsonFileContent(string $file_path, bool $as_array = true)
    {
        if (! \is_file($file_path)) {
            throw new \InvalidArgumentException("File [{$file_path}] was not found");
        }

        return Json::decode((string) \file_get_contents($file_path), $as_array);
    }
}
