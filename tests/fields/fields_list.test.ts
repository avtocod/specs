import * as path from 'path';
import { get } from 'lodash'
import { groups_list, specs_root_dir, required_files_map } from "../helpers";
import { Field } from "./fields";

const fields_file_name = 'fields_list.json';
const json_schema_file_name = 'json-schema.json';
const non_fillable_fields: {[k: string]: string[]} = {
    default: [
        'tech_data.manufacturer.name',
        'tech_data.brand.name.rus',
        'tech_data.transmission.type',
        'calculate.tax.moscow.yearly.amount',
        'calculate.tax.regions.yearly.amount',
        'utilizations.items[].org.name',
        'utilizations.items[].country.name',
        'mileages.items[].filled_by.source',
    ]
};

describe.each(groups_list)(`${fields_file_name} file in %s group of fields specs`, group_name => {
    const specs_path = path.resolve(specs_root_dir, 'fields', group_name, fields_file_name);
    const fields: Array<Field> = require(specs_path);
    const report_schema_path = path.resolve(specs_root_dir, 'reports', group_name, json_schema_file_name);
    const report_schema = require(report_schema_path);
    const examples_reports_test_cases = required_files_map.reports
        .filter(path => path !== json_schema_file_name)
        .map(relative_path => {
            return [relative_path, require(path.resolve(specs_root_dir, 'reports', group_name, relative_path))];
        });

    describe.each(fields)('item %j', (field): any => {

        test.concurrent('has no doubles with the same "path"', async () => {
            const matches = fields.filter(fields_item => fields_item.path === field.path);
            expect(matches).toBeArrayOfSize(1);
        });

        test.concurrent(`should ${non_fillable_fields[group_name].indexOf(field.path) === -1 ? 'be fillable by at least one source' : 'not be fillable by any source'}`, async () => {
            if (field.fillable_by.length > 0) {
                expect(non_fillable_fields[group_name]).not.toContain(field.path);
            } else {
                expect(non_fillable_fields[group_name]).toContain(field.path);
            }
        });

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

        test.concurrent(`should have declaration in "reports/${group_name}/json-schema.json"`, async () => {
            expect(get(report_schema, specs_field_path.join('.'))).toBeObject();
        });

        test.concurrent(`should have same description in "reports/${group_name}/json-schema.json"`, async () => {
            expect(field.description).toInclude(get(report_schema, specs_field_path.join('.') + '.description'));
        })

        test.concurrent(`should have identical set of values in "fillable_by" property with "reports/${group_name}/json-schema.json"`, async () => {
            expect(get(report_schema, specs_field_path.join('.') + '.fillable_by')).toIncludeSameMembers(field.fillable_by);
        });

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
                        case 'integer':
                            expect(report_field_value).toBeNumber();
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
