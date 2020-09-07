import * as path from 'path';
import { groups_list, specs_root_dir, required_files_map } from "../helpers";
import { VehicleType } from "./vehicles";

const types_file_name = 'types.json';

describe.each(groups_list)('types.json file in %s group of vehicles specs', group_name => {
    const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, types_file_name);
    const types: Array<VehicleType> = require(specs_path);

    describe.each(types)('item %j has', (type): any => {
        test.concurrent('all expected props ("id", "name", "alias")', async () => {
            expect(type).toContainAllKeys(['id', 'name', 'alias']);
        });

        test.concurrent(`"id" property with value equals "ID_TYPE_${type.alias.toUpperCase()}"`, async () => {
            expect(type.id).toBe(`ID_TYPE_${type.alias.toUpperCase()}`);
        });

        test.concurrent('no doubles with the same "id", "name" and "alias"', async () => {
            const matches = types.filter(types_item => {
                return types_item.id === type.id
                    && types_item.name === type.name
                    && types_item.alias === type.alias;
            });
            expect(matches).toBeArrayOfSize(1);
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
