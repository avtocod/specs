// For a detailed explanation regarding each configuration property, visit:
// https://jestjs.io/docs/en/configuration.html

const { defaults: tsjPreset } = require('ts-jest/presets');

/**
 * @typedef {import('ts-jest')}
 * @type {import('@jest/types').Config.ConfigGlobals}
 */
module.exports = {
  // Stop running tests after `n` failures
  bail: 1,

  // A list of paths to modules that run some code to configure or set up the testing framework before each test
  setupFilesAfterEnv: [
      'jest-extended',
      'jest-chain',
  ],

  testEnvironment: 'node',

  // The glob patterns Jest uses to detect test files
  testMatch: [
    '**/?(*.)+(spec|test).ts',
  ],

  // A map from regular expressions to paths to transformers
  transform: {
      ...tsjPreset.transform
  },

  // ts-jest configuration
  globals: {
    'ts-jest': {
      tsconfig: 'tsconfig.json'
    },
  },

  // Indicates whether each individual test should be reported during the run
  verbose: false,
};
