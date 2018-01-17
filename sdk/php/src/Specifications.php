<?php

namespace Avtocod\Specifications;

use Exception;

/**
 * Class Specifications.
 *
 * Класс, упрощающий доступ к файлам спецификаций.
 */
class Specifications
{
    /**
     * Имя группы "по умолчанию".
     */
    const GROUP_NAME_DEFAULT = 'default';

    /**
     * Возвращает спецификацию по филдам в соответствии с группой.
     *
     * @throws Exception
     *
     * @param string $group_name
     *
     * @return array[]
     */
    public static function getFieldsSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/fields/%s/fields_list.json', $group_name))
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
     */
    protected static function getJsonFileAsArray($file_path)
    {
        if (! file_exists($file_path)) {
            throw new Exception(sprintf('File "%s" was not found', $file_path));
        }

        return json_decode(file_get_contents($file_path), true);
    }

    /**
     * Возвращает путь к корневой директории спецификаций.
     *
     * @param string|null $additional_path
     *
     * @return string
     */
    public static function getRootDirectoryPath($additional_path = null)
    {
        static $root = null;

        $root = is_null($root)
            ? realpath(__DIR__ . '/../../..')
            : $root;

        return is_string($additional_path) && ! empty($additional_path)
            ? $root . DIRECTORY_SEPARATOR . ltrim((string) $additional_path, ' \\/')
            : $root;
    }

    /**
     * Возвращает спецификацию по идентификаторам в соответствии с группой.
     *
     * @throws Exception
     *
     * @param string $group_name
     *
     * @return array[]
     */
    public static function getIdentifiersSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/identifiers/%s/identifiers_types_list.json', $group_name))
        );
    }

    /**
     * Возвращает спецификацию по источникам в соответствии с группой.
     *
     * @throws Exception
     *
     * @param string $group_name
     *
     * @return array[]
     */
    public static function getSourcesSpecification($group_name = self::GROUP_NAME_DEFAULT)
    {
        return static::getJsonFileAsArray(
            static::getRootDirectoryPath(sprintf('/sources/%s/sources_list.json', $group_name))
        );
    }
}
