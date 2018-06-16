<?php

namespace Avtocod\Specifications;

use Exception;

/**
 * @deprecated No longer supported. Please, update this package up to v2.
 */
class Specifications
{
    /**
     * Имя группы "по умолчанию".
     */
    const GROUP_NAME_DEFAULT = 'default';

    /**
     * Возвращает путь к корневой директории спецификаций.
     *
     * @param string|null $additional_path
     *
     * @return string
     *
     * @deprecated No longer supported. Please, update this package up to v2.
     */
    public static function getRootDirectoryPath($additional_path = null)
    {
        static $root = null;

        trigger_error(
            sprintf('Method [%s] is deprecated. Please, update this package up to v2', __METHOD__),
            E_USER_DEPRECATED
        );

        $root = is_null($root)
            ? realpath(__DIR__ . '/../../..')
            : $root;

        return is_string($additional_path) && ! empty($additional_path)
            ? $root . DIRECTORY_SEPARATOR . ltrim((string) $additional_path, ' \\/')
            : $root;
    }

    /**
     * Возвращает спецификацию по филдам в соответствии с группой.
     *
     * @param string $group_name
     *
     * @throws Exception
     *
     * @return array[]
     *
     * @deprecated No longer supported. Please, update this package up to v2.
     */
    public static function getFieldsSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        trigger_error(
            sprintf('Method [%s] is deprecated. Please, update this package up to v2', __METHOD__),
            E_USER_DEPRECATED
        );

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/fields/%s/fields_list.json', $group_name))
        );
    }

    /**
     * Возвращает спецификацию по идентификаторам в соответствии с группой.
     *
     * @param string $group_name
     *
     * @throws Exception
     *
     * @return array[]
     *
     * @deprecated No longer supported. Please, update this package up to v2.
     */
    public static function getIdentifiersSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        trigger_error(
            sprintf('Method [%s] is deprecated. Please, update this package up to v2', __METHOD__),
            E_USER_DEPRECATED
        );

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/identifiers/%s/identifiers_types_list.json', $group_name))
        );
    }

    /**
     * Возвращает спецификацию по источникам в соответствии с группой.
     *
     * @param string $group_name
     *
     * @throws Exception
     *
     * @return array[]
     *
     * @deprecated No longer supported. Please, update this package up to v2.
     */
    public static function getSourcesSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        trigger_error(
            sprintf('Method [%s] is deprecated. Please, update this package up to v2', __METHOD__),
            E_USER_DEPRECATED
        );

        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/sources/%s/sources_list.json', $group_name))
        );
    }

    /**
     * Возвращает контент json файла в виде php-массива.
     *
     * @param string $file_path
     *
     * @throws Exception
     *
     * @return array
     *
     * @deprecated No longer supported. Please, update this package up to v2.
     */
    protected static function getJsonFileAsArray($file_path)
    {
        if (! file_exists($file_path)) {
            throw new Exception(sprintf('File "%s" was not found', $file_path));
        }

        $result = json_decode(file_get_contents($file_path), true);

        if (! is_array($result) || json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception(sprintf('Cannot parse json file: "%s"', $file_path));
        }

        return $result;
    }
}
