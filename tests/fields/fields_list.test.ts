import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { Field } from "./fields";

const fields_file_name = 'fields_list.json';
const expected_items_count = 390;
const non_fillable_fields = [
    'tech_data.manufacturer.name',
    'tech_data.brand.name.rus',
    'tech_data.transmission.type',
    'calculate.tax.moscow.yearly.amount',
    'calculate.tax.regions.yearly.amount',
    'utilizations.items[].org.name',
    'utilizations.items[].country.name',
    'mileages.items[].filled_by.source',
];

describe.each(groups_list)(`${fields_file_name} file in %s group of fields specs`, group_name => {
    const specs_patch = path.resolve(specs_root_dir, 'fields', group_name, fields_file_name);
    const fields: Array<Field> = require(specs_patch);


    test.concurrent(`has ${expected_items_count} items`, async () => {
        expect(fields.length).toBe(expected_items_count);
    });

    describe.each(fields)('item %j', (field): any => {

        test.concurrent(`should ${non_fillable_fields.indexOf(field.path) === -1 ? 'be fillable by at least one source' : 'not be fillable by any source'}`, async () => {
            if (field.fillable_by.length > 0) {
                expect(non_fillable_fields).not.toContain(field.path);
            } else {
                expect(non_fillable_fields).toContain(field.path);
            }
        });
    });
});
