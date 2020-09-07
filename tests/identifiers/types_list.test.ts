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

describe.each(groups_list)(`${identifiers_file_name} file in %s group of identifiers specs`, group_name => {
    const specs_path = path.resolve(specs_root_dir, 'identifiers', group_name, identifiers_file_name);
    const identifiers: Array<Identifier> = require(specs_path);

    describe.each(identifiers)('item %j', (identifier): any => {
        test.concurrent('should have allowed value of "type" property', async () => {
            expect(expected_identifiers_types[group_name]).toContain(identifier.type);
        });

        test.concurrent('has no doubles with the same "type"', async () => {
            const matches = identifiers.filter(identifiers_item => identifiers_item.type === identifier.type);
            expect(matches).toBeArrayOfSize(1);
        });
    });
});
