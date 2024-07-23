import * as path from 'path';
import { get } from 'lodash'
import { Field } from "./fields";
import { Source } from "../sources/sources";
import {
    groups_list,
    specs_root_dir,
    required_files_map
} from "../helpers";

const fields_file_name = 'fields_list.json';
const json_schema_file_name = 'json-schema.json';
const non_fillable_fields: {[k: string]: string[]} = {
    default: [
        'tech_data.manufacturer.name',
        'tech_data.brand.name.rus',
        'tech_data.transmission.type',
        'tech_data.filled_by.provider',
        'calculate.tax.moscow.yearly.amount',
        'calculate.tax.regions.yearly.amount',
        'utilizations.items[].org.name',
        'utilizations.items[].country.name',
        'mileages.items[].filled_by.source',
    ]
};
// for each defined groups of specifications...
describe.each(groups_list)(`${fields_file_name} file in %s group of fields specs`, group_name => {
    // build path to fields_list.json file
    const specs_path = path.resolve(specs_root_dir, 'fields', group_name, fields_file_name);
    // require content of file
    const fields: Array<Field> = require(specs_path);
    // build path to report's json-schema
    const report_schema_path = path.resolve(specs_root_dir, 'reports', group_name, json_schema_file_name);
    //require content of report's json-schema
    const report_schema = require(report_schema_path);
    // build test cases data for report's examples
    const examples_reports_test_cases = required_files_map.reports
        .filter(path => path !== json_schema_file_name)
        .map(relative_path => {
            return [relative_path, require(path.resolve(specs_root_dir, 'reports', group_name, relative_path))];
        });
    // require list of sources from source_list.json
    const sources_list: string[] = require(path.resolve(specs_root_dir, 'sources', group_name, 'sources_list.json'))
        .map((source: Source) => source.name);

    // each field
    describe.each(fields)('item %j', (field) => {
        // should not have duplicates with the same path
        test.concurrent('has no doubles with the same "path"', async () => {
            const matches = fields.filter(fields_item => fields_item.path === field.path);
            expect(matches).toBeArrayOfSize(1);
        });

        // detect should field be fillable by at least one source or not and check it
        const is_should_be_fillable = non_fillable_fields[group_name].indexOf(field.path) === -1
        if (is_should_be_fillable) {
            test.concurrent('should be fillable by at least one source', async () => {
                expect(non_fillable_fields[group_name]).not.toContain(field.path);
            });
        } else {
            test.concurrent('should not be fillable by any source', async () => {
                expect(non_fillable_fields[group_name]).toContain(field.path);
            });
        }

        // build field definitions paths in report's json-schema and examples
        const specs_field_path: string[] = [];
        const report_field_path: string[] = [];

        field.path.split('.').forEach(part => {
            specs_field_path.push('properties');
            if (part.endsWith('[]')) {
                specs_field_path.push(...[part.replace('[]', ''), 'items']);
                // If path contains '...[]' - work directly with first item inside report item array
                report_field_path.push(part.replace('[]', '.0'));
            } else {
                specs_field_path.push(part);
                report_field_path.push(part);
            }
        });
        // check that field has declaration in report's json-schema
        test.concurrent(`should have declaration in "reports/${group_name}/json-schema.json"`, async () => {
            expect(get(report_schema, specs_field_path.join('.'))).toBeObject();
        });

        // check that field's description value contains description from report's json schema
        test.concurrent(`should have same description in "reports/${group_name}/json-schema.json"`, async () => {
            expect(field.description).toInclude(get(report_schema, specs_field_path.join('.') + '.description'));
        })

        // check that field has identical set of sources that can fill it in fields_list.json file and report's json-schema
        test.concurrent(`should have identical set of values in "fillable_by" property with "reports/${group_name}/json-schema.json"`, async () => {
            expect(get(report_schema, specs_field_path.join('.') + '.fillable_by')).toIncludeSameMembers(field.fillable_by);
        });

        // check that field has unique set of sources that can fill it in fields_list.json file
        test.concurrent(`should have unique set of values in "fillable_by" property`, async () => {
            let unique = Array.from(new Set(field.fillable_by));
            expect(field.fillable_by.length).toEqual(unique.length)
        });

        // check that any of source in fillable_by property listed in sources_list.json
        test.concurrent(`should have all sources in "fillable_by" property are listed in source_list.json`, async () => {
            expect(sources_list).toIncludeAllMembers(field.fillable_by);
        });

        // check that field presents in each report's example and has same data type with declared in fields_list.json
        test.concurrent.each(examples_reports_test_cases)(`should presents in %s and have same type`, async (report_path, report_content) => {
            const report_field_value = get(report_content, report_field_path.join('.'), "__NOT_SETTED__");

            expect(report_field_value).not.toBe('__NOT_SETTED__');

            field.types.forEach(field_type => {
                if (report_field_value !== null) {
                    switch (field_type) {
                        case 'object':
                            expect(report_field_value).toBeObject();
                            break;
                        case 'array':
                            expect(report_field_value).toBeArray();
                            break;
                        case 'boolean':
                            expect(report_field_value).toBeBoolean();
                            break;
                        case 'float':
                            expect(report_field_value).toBeNumber();
                            break;
                        case 'integer':
                            expect(Number.isInteger(report_field_value)).toBeTrue();
                            break;
                        case 'string':
                            expect(report_field_value).toBeString();
                            break;
                        default:
                            expect.fail(`Field ${report_field_path} has unexpected type. Got [${typeof report_field_value}]`);
                    }
                }
            });
        });
    });
});
