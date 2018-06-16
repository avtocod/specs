<?php

namespace Avtocod\Specifications;

use Avtocod\Specifications\Structures\Field;
use Avtocod\Specifications\Structures\IdentifierType;
use Avtocod\Specifications\Structures\Source;
use Exception;
use Illuminate\Support\Collection;

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
    public static function getRootDirectoryPath($additional_path = null)
    {
        $root = dirname(dirname(dirname(__DIR__))); // `dirname()` reason - https://git.io/vhXvr

        return $additional_path !== null
            ? $root . DIRECTORY_SEPARATOR . ltrim((string) $additional_path, ' \\/')
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
    public static function getFieldsSpecification($group_name = null)
    {
        $group_name = $group_name === null
            ? self::GROUP_NAME_DEFAULT
            : $group_name;

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
     * Get report example
     *
     * @param string|null $group_name
     * @param string      $name
     *
     * @return array
     */
    public static function getReportExample($group_name = null, $name = 'full')
    {
        $group_name = $group_name === null
            ? self::GROUP_NAME_DEFAULT
            : $group_name;

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath("/fields/{$group_name}/examples/{$name}.json")
        );
    }

    /**
     * Get identifier types specification an collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|IdentifierType[]
     */
    public static function getIdentifierTypesSpecification($group_name = null)
    {
        $group_name = $group_name === null
            ? self::GROUP_NAME_DEFAULT
            : $group_name;

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
     * Get sources specification an collection of typed objects.
     *
     * @param string|null $group_name
     *
     * @throws Exception
     *
     * @return Collection|Source[]
     */
    public static function getSourcesSpecification($group_name = null)
    {
        $group_name = $group_name === null
            ? self::GROUP_NAME_DEFAULT
            : $group_name;

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
     * Get json-file content as an array.
     *
     * @param string $file_path
     *
     * @throws Exception
     *
     * @return array
     */
    protected static function getJsonFileAsArray($file_path)
    {
        if (! \file_exists($file_path)) {
            throw new Exception("File [{$file_path}] was not found");
        }

        $result = \json_decode(file_get_contents($file_path), true);

        if (! \is_array($result) || \json_last_error() !== JSON_ERROR_NONE) {
            // @codeCoverageIgnoreStart
            throw new Exception("Cannot parse json file: [{$file_path}]");
            // @codeCoverageIgnoreEnd
        }

        return $result;
    }
}
