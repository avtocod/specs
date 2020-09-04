import * as path from 'path';
import * as Ajv from 'ajv';
import {groups_list, specs_root_dir} from "../definitions";

const schemaValidator = new Ajv({ allErrors: true });

describe('Fields specs', () => {
    test.concurrent.each(groups_list)('%s/fields_list.json is valid against JsonSchema', async (group_name) => {
        const fields_list = require(path.resolve(specs_root_dir, 'fields', group_name, 'fields_list.json'));
        const json_schema = require(path.resolve(specs_root_dir, 'fields', group_name, 'json-schema.json'));

        const valid = schemaValidator.validate(json_schema, fields_list);

        expect(valid).toBeTruthy();

    })
})
