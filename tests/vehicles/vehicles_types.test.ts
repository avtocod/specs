import * as path from 'path';
import { groups_list, specs_root_dir, required_files_map } from "../helpers";
import { VehicleType } from "./vehicles";

const types_file_name = 'types.json';
const expected_items_count: {[k: string]: number} = {
    default: 18
};

describe.each(groups_list)('types.json file in %s group of vehicles specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, types_file_name);
    const types: Array<VehicleType> = require(specs_path);

    test.concurrent(`has ${expected_items_count[group_name]} items`, async () => {
        expect(types.length).toBe(expected_items_count[group_name]);
    });

    describe.each(types)('item %j has', (type): any => {
        test.concurrent('all expected props ("id", "name", "alias")', async () => {
            expect(type).toContainAllKeys(['id', 'name', 'alias']);
        });

        test.concurrent(`"id" property with value equals "ID_TYPE_${type.alias.toUpperCase()}"`, async () => {
            expect(type.id).toBe(`ID_TYPE_${type.alias.toUpperCase()}`);
        });

        test.concurrent('"name" property that is non empty string', async () => {
            expect(type.name).toBeString();
            expect(type.name.length).toBeGreaterThan(0);
        });

        test.concurrent('"alias" property that is non empty string', async () => {
            expect(type.alias).toBeString();
            expect(type.alias.length).toBeGreaterThan(0);
        });

        test.concurrent('correctly named file with models', async () => {
            const models_file_name = type.alias === 'car' ? 'models.json' : `models_${type.alias}.json`;
            expect(required_files_map.vehicles).toIncludeAllMembers([models_file_name]);
        });
    });
});
