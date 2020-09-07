import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { VehicleMark } from "./vehicles";

const marks_file_name = 'marks.json';
const expected_items_count = 2150;

describe.each(groups_list)('marks.json file in %s group of vehicles specs', group_name => {
    const specs_patch = path.resolve(specs_root_dir, 'vehicles', group_name, marks_file_name);
    const marks: Array<VehicleMark> = require(specs_patch);

    test.concurrent(`has ${expected_items_count} items`, async () => {
        expect(marks.length).toBe(expected_items_count);
    });

    describe.each(marks)('item %j has', (mark): any => {
        test.concurrent(`all expected props ("id", "name")`, async () => {
            expect(mark).toContainAllKeys(['id', 'name']);
        });

        test.concurrent(`"id" property with value matching with pattern "^ID_MARK_.*$`, async () => {
            expect(mark.id).toMatch(new RegExp('^ID_MARK_.*$'));
        });

        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(mark.name).toBeString();
            expect(mark.name.length).toBeGreaterThan(0);
        });
    });
});
