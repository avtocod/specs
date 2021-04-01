import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { VehicleMark } from "./vehicles";

const marks_file_name = 'marks.json';

// for each defined groups of specifications...
describe.each(groups_list)('marks.json file in %s group of vehicles specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, marks_file_name);
    const marks: Array<VehicleMark> = require(specs_path);
    // each mark
    describe.each(marks)('item %j has', (mark) => {
        // should have all required properties
        test.concurrent(`all expected props ("id", "name", "logotype_uri")`, async () => {
            expect(mark).toContainAllKeys(['id', 'name', 'logotype_uri']);
        });
        // value of "id" property should matches with pattern
        test.concurrent(`"id" property with value matching with pattern "^ID_MARK_.*$`, async () => {
            expect(mark.id).toMatch(new RegExp('^ID_MARK_.*$'));
        });
        // mark object shouldn't have duplicates with same "id" and "name"
        test.concurrent('no doubles with the same "id" and "name"', async () => {
            const matches = marks.filter(marks_item => marks_item.id === mark.id && marks_item.name === mark.name);
            expect(matches).toBeArrayOfSize(1);
        });
        // value of "name" property should be non empty string
        test.concurrent(`"name" property that is non empty string`, async () => {
            expect(mark.name).toBeString();
            expect(mark.name.length).toBeGreaterThan(0);
        });
        // value of "logotype" property should be non empty string or null
        test.concurrent(`"logotype" property that is non empty string or null`, async () => {
            if (typeof mark.logotype_uri === 'string') {
                expect(mark.logotype_uri.length).toBeGreaterThan(0);
                expect(mark.logotype_uri).toMatch(new RegExp('^https?.*\.(png|jpg)$'));
            } else {
                expect(mark.logotype_uri).toBeNull();
            }
        });
    });
});
