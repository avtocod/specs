import * as Ajv from 'ajv';
import { get } from 'http';
const draft07SchemaUri = 'https://json-schema.org/draft-07/schema';
const getDraft07Schema = async () => {
    return new Promise((resolve, reject) => {
        get(draft07SchemaUri, response => {
            // reject on bad status
            if (response.statusCode && (response.statusCode < 200 || response.statusCode >= 300)) {
                reject(new Error('[getDraft07Schema] Error statusCode=' + response.statusCode));
            }
            // cumulate data
            let raw_body = '';
            response.on('data', chunk => { raw_body += chunk; });
            // resolve on end
            response.on('end', () => {
                try {
                    resolve(JSON.parse(raw_body));
                }
                catch (e) {
                    reject(e);
                }
            });
        }).on('error', err => {
            reject(err);
        });
    });
};
const schemaValidator = new Ajv({ allErrors: true });
schemaValidator.addSchema(await getDraft07Schema());
export default schemaValidator;
