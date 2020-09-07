import * as path from 'path';
import * as Ajv from 'ajv';
import * as draft07 from 'ajv/lib/refs/json-schema-draft-07.json';
import { groups_list, specs_root_dir, required_files_map } from "../helpers";

const json_schema_filename = 'json-schema.json';
const specs_types = Object.keys(required_files_map).filter(specs_type => specs_type != 'vehicles');

// @see <https://github.com/ajv-validator/ajv/issues/1104>
const schema_validator = new Ajv({ allErrors: true })
    .addMetaSchema(draft07, 'https://json-schema.org/draft-07/schema#');

describe.each(specs_types)('%s specs', (specs_type) => {
    describe.each(groups_list)('%s group`s files', (group_name) => {
        const json_schema = require(path.resolve(specs_root_dir, specs_type, group_name, json_schema_filename));

        test.concurrent('json-schema.json is valid JsonSchema', async () => {
            expect(schema_validator.validateSchema(json_schema)).toBeTruthy();
        });

        const testing_files = required_files_map[specs_type].filter((file_name): boolean => {
            return file_name !== json_schema_filename;
        });

        test.concurrent.each(testing_files)('%s is valid against json-schema.json', async (testing_file) => {
            const testing_file_content = require(path.resolve(specs_root_dir, specs_type, group_name, testing_file));

            expect(schema_validator.validate(json_schema, testing_file_content)).toBeTruthy();
        });
    });
});
