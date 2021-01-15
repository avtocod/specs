import * as path from 'path';
import { groups_list, specs_root_dir } from '../helpers';
import { VehicleDrivingWheel } from './vehicle_attributes';

const driving_wheels_file_name = 'driving_wheels.json';

// for each defined groups of specifications...
describe.each(groups_list)('driving_wheels.json file in %s group of vehicle attributes specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicle_attributes', group_name, driving_wheels_file_name);
    const items: Array<VehicleDrivingWheel> = require(specs_path);

    describe.each(items)('item %j has', (item) => {

        // should have all required properties
        test.concurrent(`all expected props ("id", "name")`, async () => {
            expect(item).toContainAllKeys(['id', 'name']);
        });

        // value of "id" property should matches with pattern
        test.concurrent(`"id" property with value matching with pattern "^ID_DRIVING_WHEELS_.*$`, async () => {
            expect(item.id).toMatch(new RegExp('^ID_DRIVING_WHEELS_.*$'));
        });

        // item shouldn't have duplicates with same "id" and "name"
        test.concurrent('no doubles with the same "id" and "name"', async () => {
            const matches = items.filter(uniq_item => uniq_item.id === item.id && uniq_item.name === item.name);
            expect(matches).toBeArrayOfSize(1);
        });

        // value of "name" property should be non empty string
        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(item.name).toBeString();
            expect(item.name.length).toBeGreaterThan(0);
        });
    });
});
