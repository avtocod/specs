import * as path from 'path';
import { groups_list, specs_root_dir, required_files_map } from "../helpers";
import { VehicleMark, VehicleModel } from "./vehicles";

const models_file_names = required_files_map.vehicles.filter(filename => {
    return ['marks.json', 'types.json'].indexOf(filename) === -1;
});

describe.each(groups_list)('%s group of vehicles specs', group_name => {
    const marks_path = path.resolve(specs_root_dir, 'vehicles', group_name, 'marks.json');
    const marks: Array<VehicleMark> = require(marks_path);

    describe.each(models_file_names)('%s file', models_file_name => {
        const specs_path = path.resolve(specs_root_dir, 'vehicles', group_name, models_file_name);
        const models: Array<VehicleModel> = require(specs_path);

        describe.each(models)('item %j has', (model): any => {
            test.concurrent(`all expected props ("id", "name", "mark_id")`, async () => {
                expect(model).toContainAllKeys(['id', 'name', 'mark_id']);
            });

            test.concurrent(`"id" property with value matching with pattern "^ID_MARK_.*_MODEL_.*$"`, async () => {
                expect(model.id).toMatch(new RegExp('^ID_MARK_.*_MODEL_.*$'));
            });

            test.concurrent('no doubles with the same "id", "name" and "mark_id"', async () => {
                const matches = models.filter(models_item => {
                    return models_item.id === model.id
                        && models_item.name === model.name
                        && models_item.mark_id === model.mark_id;
                });
                expect(matches).toBeArrayOfSize(1);
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
