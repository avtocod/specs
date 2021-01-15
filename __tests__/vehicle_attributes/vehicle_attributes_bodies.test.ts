import * as path from 'path';
import { groups_list, specs_root_dir } from '../helpers';
import { VehicleBody } from './vehicle_attributes';

const bodies_file_name = 'bodies.json';

// for each defined groups of specifications...
describe.each(groups_list)('bodies.json file in %s group of vehicles attributes specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicle_attributes', group_name, bodies_file_name);
    const items: Array<VehicleBody> = require(specs_path);

    describe.each(items)('item %j has', (body) => {

        // should have all required properties
        test.concurrent(`all expected props ("id", "name")`, async () => {
            expect(body).toContainAllKeys(['id', 'name']);
        });

        // value of "id" property should matches with pattern
        test.concurrent(`"id" property with value matching with pattern "^ID_BODY_.*$`, async () => {
            expect(body.id).toMatch(new RegExp('^ID_BODY_.*$'));
        });

        // body shouldn't have duplicates with same "id" and "name"
        test.concurrent('no doubles with the same "id" and "name"', async () => {
            const matches = items.filter(body_item => body_item.id === body.id && body_item.name === body.name);
            expect(matches).toBeArrayOfSize(1);
        });

        // value of "name" property should be non empty string
        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(body.name).toBeString();
            expect(body.name.length).toBeGreaterThan(0);
        });
    });
});
