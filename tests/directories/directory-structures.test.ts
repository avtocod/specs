import * as path from 'path';
import * as fs from 'fs';
import {
    groups_list,
    required_files_map,
    specs_root_dir
} from "../helpers";

describe('Specification`s directory', (): void => {
    describe.each(Object.keys(required_files_map))('/%s', specs_type_directory => {
        // build allowed files paths for specs type in all groups
        const allowed_files: Array<string> = [];
        required_files_map[specs_type_directory].forEach(file_name => {
            groups_list.forEach(group_name => {
                allowed_files.push(path.join(group_name, file_name))
            });
        });

        // test that each allowed file exists, readable and contain valid json data
        describe.each(allowed_files)('contains file %s that', file_path => {
            const absolute_file_path = path.resolve(specs_root_dir, specs_type_directory, file_path)
            // test that each allowed file exists and readable
            test.concurrent('is readable', async () => {
                return fs.promises.access(absolute_file_path, fs.constants.F_OK | fs.constants.R_OK);
            });

            // test that each allowed file has valid json content
            test.concurrent('contains valid json content', async () => {
                new Promise(resolve => {
                    resolve(require(absolute_file_path));
                })
            });
        })

        // get all files in specs_type_directory
        const base_directory_path = path.resolve(specs_root_dir, specs_type_directory);
        const all_files = getAllFilesPaths(base_directory_path);
        // test that directory hasn't any not allowed files
        test.concurrent('does not contains any files except allowed', async () => {
            all_files.forEach(file_path => {
                expect(allowed_files).toContain(path.relative(base_directory_path, file_path))
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
