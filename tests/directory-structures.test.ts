import * as path from 'path';
import * as fs from 'fs';

const groups_list: Array<string> = [
    'default'
];

type FilesMap = {[key: string]: Array<string>}

const files_map: FilesMap = {
    'fields': [
        'fields_list.json',
        'json-schema.json'
    ],
    'identifiers': [
        'types_list.json',
        'json-schema.json'
    ],
    'reports': [
        'examples/empty.json',
        'examples/full.json',
        'json-schema.json'
    ],
    'sources': [
        'sources_list.json',
        'json-schema.json',
    ],
    'vehicles': [
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
    ]
};

describe('Specifications', (): void => {
    describe.each(Object.keys(files_map))('Directory "/%s"', base_directory => {
        // build allowed files paths for specs type in all groups
        const allowed_files: Array<string> = [];
        files_map[base_directory].forEach(file_name => {
            groups_list.forEach(group_name => {
                allowed_files.push(path.resolve(__dirname, '..', base_directory, group_name, file_name));
            });
        });

        // test that each allowed file exists and readable
        test.concurrent.each(allowed_files)('contains file %s that is readable', async (file_path): Promise<void> => {
            return fs.promises.access(file_path, fs.constants.F_OK | fs.constants.R_OK);
        });

        // get all files in base_directory
        const base_directory_path = path.join(__dirname, '..', base_directory);
        const all_files = getAllFilesPaths(base_directory_path);
        // test that directory hasn't any not allowed files
        test('does not contains any files except allowed', () => {
            all_files.forEach(file_path => {
                expect(allowed_files).toContain(file_path)
            })
        });
    })
});

/**
 * Returns all nested files paths for given directory
 *
 * @param base_path
 * @return Array<string>
 */
function getAllFilesPaths(base_path: string): Array<string> {
    // get all files and directories in base_path
    const files = fs.readdirSync(base_path);
    const array_of_files: Array<string> = [];

    files.forEach((file: string) => {
        // build full path for founded file or directory
        const file_path = path.join(base_path,file);
        if (fs.statSync(file_path).isDirectory()) {
            // if we found a directory then start recursive search
            array_of_files.push(...getAllFilesPaths(file_path));
        } else {
            array_of_files.push(file_path);
        }
    })
    // return only files, not directories
    return array_of_files;
}
