import * as path from 'path';
import { groups_list, specs_root_dir } from '../helpers';
import { VehicleBodyType } from './vehicles';

const file_name = 'body_types.json';

// for each defined groups of specifications...
describe.each(groups_list)(file_name + ' file in %s group of vehicle specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, file_name);
    const items: Array<VehicleBodyType> = require(specs_path);

    describe.each(items)('item %j has', (item) => {

        // should have all required properties
        test.concurrent(`all expected props ("id", "name")`, async () => {
            expect(item).toContainAllKeys(['id', 'name']);
        });

        // value of "id" property should matches with pattern
        test.concurrent(`"id" property with value matching with pattern "^ID_BODY_TYPE_.*$`, async () => {
            expect(item.id).toMatch(new RegExp('^ID_BODY_TYPE_.*$'));
        });

        // attribute shouldn't have duplicates with same "id" and "name"
        test.concurrent('no doubles with the same "id" and "name"', async () => {
            const matches = items.filter(unique_item => unique_item.id === item.id && unique_item.name === item.name);
            expect(matches).toBeArrayOfSize(1);
        });

        // value of "name" property should be non empty string
        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(item.name).toBeString();
            expect(item.name.length).toBeGreaterThan(0);
        });
    });
});
