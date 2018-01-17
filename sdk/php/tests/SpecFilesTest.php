<?php

namespace Avtocod\Specifications\Tests;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;

/**
 * Class SpecFilesTest.
 */
class SpecFilesTest extends AbstractTestCase
{
    /**
     * Тест структуры директорий.
     *
     * @return void
     */
    public function testDirectoriesStructure()
    {
        $root = $this->getRootDirPath();

        $directories = array_map('realpath', [
            $root . '/fields',
            $root . '/fields/default',
            $root . '/fields/default/examples',
            $root . '/identifiers',
            $root . '/identifiers/default',
            $root . '/sources',
            $root . '/sources/default',
        ]);

        foreach ($directories as $directory_path) {
            $this->assertDirectoryExists($directory_path);
            $this->assertDirectoryIsReadable($directory_path);
        }
    }

    /**
     * Тест наличия файлов.
     *
     * @return void
     */
    public function testFilesStructure()
    {
        $root = $this->getRootDirPath();

        $files = array_map('realpath', [
            $root . '/fields/default/fields_list.json',
            $root . '/fields/default/examples/blank.json',
            $root . '/identifiers/default/identifiers_types_list.json',
            $root . '/sources/default/sources_list.json',
        ]);

        foreach ($files as $file) {
            $this->assertFileExists($file);
            $this->assertFileIsReadable($file);
        }
    }

    /**
     * Тест корректности json-файлов.
     *
     * @return void
     */
    public function testJsonFilesFormat()
    {
        $root = $this->getRootDirPath();

        $exclude_directories = array_map('realpath', [
            $root . '/vendor',
            $root . '/tests',
            $root . '/.git',
        ]);

        $directory = new RecursiveDirectoryIterator(realpath($root));
        $iterator  = new RecursiveIteratorIterator($directory);
        $regex     = new RegexIterator($iterator, '~^.+\.json$~i', RecursiveRegexIterator::GET_MATCH);
        $counter   = 0;

        foreach ($regex as $result) {
            foreach ($result as $file_path) {
                // Skip excluded directory
                foreach ($exclude_directories as $exclude_directory_path) {
                    if (strpos($file_path, $exclude_directory_path) === 0) {
                        continue 2;
                    }
                }

                $this->assertJson(file_get_contents($file_path));
                ++$counter;
            }
        }

        $this->assertGreaterThan(5, $counter);
    }
}
