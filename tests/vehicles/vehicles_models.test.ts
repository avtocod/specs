import * as path from 'path';
import { groups_list, specs_root_dir, required_files_map } from "../helpers";
import { VehicleMark, VehicleModel } from "./vehicles";

const models_file_names = required_files_map.vehicles.filter(filename => {
    return ['marks.json', 'types.json'].indexOf(filename) === -1;
});
const expected_items_count: {[key: string]: {[k: string]: number}} = {
    default: {
        'models.json': 3105,
        'models_agricultural.json': 605,
        'models_artic.json': 220,
        'models_atv.json': 965,
        'models_autoloader.json': 1067,
        'models_bulldozer.json': 130,
        'models_bus.json': 417,
        'models_construction.json': 762,
        'models_crane.json': 266,
        'models_dredge.json': 535,
        'models_light_truck.json': 268,
        'models_motorcycle.json': 2718,
        'models_municipal.json': 336,
        'models_scooter.json': 959,
        'models_self_loader.json': 184,
        'models_snowmobile.json': 289,
        'models_trailer.json': 2209,
        'models_truck.json': 589,
    }
};

describe.each(groups_list)('%s group of vehicles specs', group_name => {
    const marks_path = path.resolve(specs_root_dir, 'vehicles', group_name, 'marks.json');
    const marks: Array<VehicleMark> = require(marks_path);

    describe.each(models_file_names)('%s file', models_file_name => {
        const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, models_file_name);
        const models: Array<VehicleModel> = require(specs_path);

        test.concurrent(`has ${expected_items_count[group_name][models_file_name]} items`, async () => {
            expect(models.length).toBe(expected_items_count[group_name][models_file_name]);
        });

        describe.each(models)('item %j has', (model): any => {
            test.concurrent(`all expected props ("id", "name", "mark_id")`, async () => {
                expect(model).toContainAllKeys(['id', 'name', 'mark_id']);
            });

            test.concurrent(`"id" property with value matching with pattern "^ID_MARK_.*_MODEL_.*$"`, async () => {
                expect(model.id).toMatch(new RegExp('^ID_MARK_.*_MODEL_.*$'));
            });

            test.concurrent(`"name" property that is non empty string`, async () => {
                expect(model.name).toBeString();
                expect(model.name.length).toBeGreaterThan(0);
            });

            test.concurrent(`"mark_id" property with value that exists in marks.json file`, async () => {
                const filtered = marks.filter(mark => {
                    return mark.id === model.mark_id;
                });
                expect(filtered).toBeArrayOfSize(1);
            });
        });
    })
});
