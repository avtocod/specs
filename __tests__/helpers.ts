import * as path from 'path';

// Specs root directory path
export const specs_root_dir = path.resolve(__dirname, '..')

// List of available specs groups
export const groups_list: Array<string> = [
    'default'
];

type FilesMap = {[key: string]: Array<string>}

// All required specs files map
export const required_files_map: FilesMap = {
    fields: [
        'fields_list.json',
        'json-schema.json'
    ],
    identifiers: [
        'types_list.json',
        'json-schema.json'
    ],
    reports: [
        'examples/empty.json',
        'examples/full.json',
        'json-schema.json'
    ],
    sources: [
        'sources_list.json',
        'json-schema.json'
    ],
    vehicles: [
        'marks.json',
        'models.json',
        'models_agricultural.json',
        'models_artic.json',
        'models_atv.json',
        'models_autoloader.json',
        'models_bulldozer.json',
        'models_bus.json',
        'models_construction.json',
        'models_crane.json',
        'models_dredge.json',
        'models_light_truck.json',
        'models_motorcycle.json',
        'models_municipal.json',
        'models_scooter.json',
        'models_self_loader.json',
        'models_snowmobile.json',
        'models_trailer.json',
        'models_truck.json',
        'types.json',
        'body_types.json',
        'driving_wheels_types.json',
        'engine_types.json',
        'steering_wheel_types.json',
        'transmission_types.json',
    ]
};

