<?php

namespace Avtocod\Specifications\Tests\SpecificationsDatum;

use RegexIterator;
use Illuminate\Support\Arr;
use RecursiveRegexIterator;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use Avtocod\Specifications\Specifications;
use Avtocod\Specifications\Tests\AbstractTestCase;

class SpecFilesTest extends AbstractTestCase
{
    /**
     * Test directory structure.
     *
     * @return void
     */
    public function testDirectoriesStructure(): void
    {
        $root = $this->getRootDirPath();

        $directories = \array_map('\\realpath', [
            $root . '/fields',
            $root . '/fields/default',
            $root . '/reports',
            $root . '/reports/default',
            $root . '/reports/default/examples',
            $root . '/identifiers',
            $root . '/identifiers/default',
            $root . '/sources',
            $root . '/sources/default',
            $root . '/vehicles',
            $root . '/vehicles/default',
        ]);

        foreach ($directories as $directory_path) {
            $this->assertDirectoryExists($directory_path);
            $this->assertDirectoryIsReadable($directory_path);
        }
    }

    /**
     * Test that files exists.
     *
     * @return void
     */
    public function testFilesStructure(): void
    {
        $root = $this->getRootDirPath();

        $files = array_map('\\realpath', [
            $root . '/fields/default/fields_list.json',
            $root . '/fields/default/json-schema.json',
            $root . '/reports/default/json-schema.json',
            $root . '/reports/default/examples/full.json',
            $root . '/reports/default/examples/empty.json',
            $root . '/identifiers/default/json-schema.json',
            $root . '/identifiers/default/types_list.json',
            $root . '/sources/default/json-schema.json',
            $root . '/sources/default/sources_list.json',
            $root . '/vehicles/default/marks.json',
            $root . '/vehicles/default/models.json',
            $root . '/vehicles/default/models_agricultural.json',
            $root . '/vehicles/default/models_artic.json',
            $root . '/vehicles/default/models_atv.json',
            $root . '/vehicles/default/models_autoloader.json',
            $root . '/vehicles/default/models_bulldozer.json',
            $root . '/vehicles/default/models_bus.json',
            $root . '/vehicles/default/models_construction.json',
            $root . '/vehicles/default/models_crane.json',
            $root . '/vehicles/default/models_dredge.json',
            $root . '/vehicles/default/models_light_truck.json',
            $root . '/vehicles/default/models_motorcycle.json',
            $root . '/vehicles/default/models_municipal.json',
            $root . '/vehicles/default/models_scooter.json',
            $root . '/vehicles/default/models_self_loader.json',
            $root . '/vehicles/default/models_snowmobile.json',
            $root . '/vehicles/default/models_trailer.json',
            $root . '/vehicles/default/models_truck.json',
            $root . '/vehicles/default/types.json',
        ]);

        foreach ($files as $file) {
            $this->assertFileExists($file);
            $this->assertFileIsReadable($file);
        }
    }

    /**
     * Test json files has a valid format.
     *
     * @return void
     */
    public function testJsonFilesFormat(): void
    {
        $root = $this->getRootDirPath();

        $exclude_directories = array_filter(array_map('\\realpath', [
            $root . '/vendor',
            $root . '/tests',
            $root . '/.git',
        ]), '\\is_string');

        $directory = new RecursiveDirectoryIterator(realpath($root));
        $iterator  = new RecursiveIteratorIterator($directory);
        $regex     = new RegexIterator($iterator, '~^.+\.json$~i', RecursiveRegexIterator::GET_MATCH);
        $counter   = 0;

        foreach ($regex as $result) {
            foreach ($result as $file_path) {
                // Skip excluded directory
                foreach ($exclude_directories as $exclude_directory_path) {
                    if (mb_strpos($file_path, $exclude_directory_path) === 0) {
                        continue 2;
                    }
                }

                $this->assertJson(file_get_contents($file_path), $file_path);
                $counter++;
            }
        }

        $this->assertGreaterThan(5, $counter);
    }

    /**
     * Test reports examples content.
     *
     * @return void
     */
    public function testReportsExamples(): void
    {
        $not_setted = sprintf('__NOT_SETTED_%s__', md5(microtime(true)));

        foreach (['default'] as $group_name) {
            $fields = Specifications::getFieldsSpecification($group_name);

            foreach (['full', 'empty'] as $example_name) {
                $report_content = Specifications::getReportExample($group_name, $example_name);

                foreach ($fields as $field) {
                    $field_path  = $field->getPath();
                    $field_types = $field->getTypes();

                    // If path contains '...[]' - work directly with first item inside report item array
                    $report_field_path = preg_replace('~(\..+)\[\]~U', '$1.0', $field_path);

                    // If field was not found in report content - returns `$not_setted` value
                    $report_field_data = Arr::get($report_content, $report_field_path, $not_setted);

                    //dump($field_path . ' -> ' . $report_field_path, $report_field_data);

                    // Report field data must not be equals with `$not_setted` value
                    $this->assertNotEquals(
                        $not_setted, $report_field_data, "Field {$field_path} (real: {$report_field_path}) in " .
                                                         "report example [{$example_name}] does not presents"
                    );

                    foreach ($field_types as $field_type) {
                        // Typify for a working with internal types checking
                        switch ($field_type) {
                            case 'object':
                                $field_type = 'array';
                                break;
                        }

                        // Any field data can be null
                        if ($report_field_data !== null) {
                            $this->assertInternalType(
                                $field_type, $report_field_data, "Field {$report_field_path} has invalid type"
                            );
                        }
                    }
                }
            }
        }
    }
}
