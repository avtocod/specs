import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { Source } from "./sources";

const sources_file_name = 'sources_list.json';
const expected_items_count = 44;
const disabled_sources = [
    'base.taxi',
    'carfax.ext',
    'tech.base',
    'base.moscow',
    'carprice'
];

describe.each(groups_list)(`${sources_file_name} file in %s group of sources specs`, group_name => {
    const specs_patch = path.resolve(specs_root_dir, 'sources', group_name, sources_file_name);
    const sources: Array<Source> = require(specs_patch);


    test.concurrent(`has ${expected_items_count} items`, async () => {
        expect(sources.length).toBe(expected_items_count);
    });

    describe.each(sources)('item %j', (source): any => {
        test.concurrent(`should be ${disabled_sources.indexOf(source.name) === -1 ? 'enabled' : 'disabled'}`, async () => {
            if (source.enabled) {
                expect(disabled_sources).not.toContain(source.name);
            } else {
                expect(disabled_sources).toContain(source.name);
            }
        });
    });
});
