import * as path from 'path';
import { groups_list, specs_root_dir } from "../helpers";
import { Source } from "./sources";

const sources_file_name = 'sources_list.json';

const disabled_sources: {[k: string]: string[]} = {
    default: [
        'base.taxi',
        'carfax.ext',
        'tech.base',
        'base.moscow',
        'carprice'
    ]
};

describe.each(groups_list)(`${sources_file_name} file in %s group of sources specs`, group_name => {
    const specs_path = path.resolve(specs_root_dir, 'sources', group_name, sources_file_name);
    const sources: Array<Source> = require(specs_path);

    describe.each(sources)('item %j', (source): any => {
        test.concurrent(`should be ${disabled_sources[group_name].indexOf(source.name) === -1 ? 'enabled' : 'disabled'}`, async () => {
            if (source.enabled) {
                expect(disabled_sources[group_name]).not.toContain(source.name);
            } else {
                expect(disabled_sources[group_name]).toContain(source.name);
            }
        });

        test.concurrent('has no doubles with the same "name"', async () => {
            const matches = sources.filter(sources_item => sources_item.name === source.name);
            expect(matches).toBeArrayOfSize(1);
        });
    });
});
