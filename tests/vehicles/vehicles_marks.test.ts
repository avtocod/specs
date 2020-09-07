import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { VehicleMark } from "./vehicles";

const marks_file_name = 'marks.json';

describe.each(groups_list)('marks.json file in %s group of vehicles specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, marks_file_name);
    const marks: Array<VehicleMark> = require(specs_path);

    describe.each(marks)('item %j has', (mark): any => {
        test.concurrent(`all expected props ("id", "name")`, async () => {
            expect(mark).toContainAllKeys(['id', 'name']);
        });

        test.concurrent(`"id" property with value matching with pattern "^ID_MARK_.*$`, async () => {
            expect(mark.id).toMatch(new RegExp('^ID_MARK_.*$'));
        });

        test.concurrent('no doubles with the same "id" and "name"', async () => {
            const matches = marks.filter(marks_item => marks_item.id === mark.id && marks_item.name === mark.name);
            expect(matches).toBeArrayOfSize(1);
        });

        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(mark.name).toBeString();
            expect(mark.name.length).toBeGreaterThan(0);
        });
    });
});
