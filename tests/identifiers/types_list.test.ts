import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { Identifier } from "./identifiers";

const identifiers_file_name = 'types_list.json';
const expected_identifiers_types: {[k: string]: string[]} = {
    default: [
        'AUTODETECT',
        'VIN',
        'GRZ',
        'STS',
        'PTS',
        'CHASSIS',
        'BODY',
        'DLN',
        'NONE'
    ]
};

const expected_items_count: {[k: string]: number} = {
    default: expected_identifiers_types.default.length
}
describe.each(groups_list)(`${identifiers_file_name} file in %s group of identifiers specs`, group_name => {
    const specs_patch = path.resolve(specs_root_dir, 'identifiers', group_name, identifiers_file_name);
    const identifiers: Array<Identifier> = require(specs_patch);


    test.concurrent(`has ${expected_items_count[group_name]} items`, async () => {
        expect(identifiers.length).toBe(expected_items_count[group_name]);
    });

    describe.each(identifiers)('item %j', (identifier): any => {
        test.concurrent('should have allowed value of "type" property', async () => {
            expect(expected_identifiers_types[group_name]).toContain(identifier.type);
        });
    });
});
