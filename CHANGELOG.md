# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## v3.10.0

### Added

- Field with path `additional_info.vehicle.owner.phone_number` [#75] 
- Field with path `additional_info.vehicle.owner.geo.postal_code` [#75]

## v3.9.0

### Added

- Field with path `pledges_nbki.items[].date.end` [#69] 
- Field with path `pledges_nbki.items[].note` [#69]
- Field with path `pledges_nbki.items[].vehicle.color.name` [#69] 
- Field with path `pledges_nbki.items[].vehicle.model.name` [#69]
- Field with path `pledges_nbki.items[].vehicle.year` [#69]
- Field with path `pledges_nbki.items[].vehicle.identifiers.vin` [#69]
- Field with path `pledges_nbki.items[].vehicle.identifiers.pts` [#69]
- Field with path `pledges_nbki.items[].vehicle.identifiers.body` [#69]
- Field with path `pledges_nbki.items[].vehicle.identifiers.chassis` [#69]
- Field with path `pledges_nbki.items[].vehicle.identifiers.engine`[#69]
- Field with path `pledges_nbki.items[].in_pledge` [#69]

## v3.8.0

### Added

- Field with path `accidents.history.items[].damage.codes` [#67]

## v3.7.0

### Changed

- **PHP SDK** minimal `PHP` version now is `7.1.3`
- **PHP SDK** maximal `illuminate/support` dependency version now is `5.8.x`

## v3.6.0

### Added

- Field with path `registration_actions.has_annulment` [#63]
- Field with path `registration_actions.items[].usage_allowed` [#63]
- Field with path `registration_actions.items[].attributes` [#61]

## v3.5.0

### Added

- Field with path `ownership.history.items[].last_operation.code` [#56]
- Field with path `ownership.history.items[].last_operation.description` [#56]
- Added casting to `array`|`object` for result of method `Specifications::getJsonFileContent()`

### Changed

- [json-schema][json-schema] `./reports/default/json-schema.json` updated [#56]
- `./reports/default/examples/empty.json` updated [#56]
- `./reports/default/examples/full.json` updated [#56]
- `./fields/default/fields_list.json` updated [#56]

## v3.4.0

### Added

- Added vehicle model types specifications `types.json`
- **PHP SDK** method `getVehicleModelsTypesSpecification`
- **PHP SDK** protected method `getVehicleTypeAliasById`
- **PHP SDK** protected method `getVehicleModelsSpecificationFilePath`
- Extended support for models of cars, new model files are grouped by vehicle type (example: `models_bus.json` - cars)

## v3.3.1

### Fixed

- Vin code in examples changed from `C5KY36SZRBD974789` to `EXAMPL0V1N1000000`

## v3.3.0

### Added

- Field with path `registration_actions.items[].owner.org.tin` [#51]
- Field with path `registration_actions.items[].owner.org.kpp` [#51]
- Field with path `registration_actions.items[].owner.org.ogrn` [#51]

### Changed

- [json-schema][json-schema] `./reports/default/json-schema.json` updated [#51]
- `./reports/default/examples/empty.json` updated [#51]
- `./reports/default/examples/full.json` updated [#51]
- `./fields/default/fields_list.json` updated [#51]

## v3.2.0

### Added

- Field with path `ads.history.items[].title`
- Field with path `ads.history.items[].text`
- Field with path `ads.history.items[].date.publish`
- Field with path `ads.history.items[].seller.name`
- Field with path `ads.history.items[].seller.phones`
- Field with path `ads.history.items[].geo`
- Field with path `ads.history.items[].price.value`
- Field with path `ads.history.items[].photos.local`
- Field with path `ads.history.items[].photos.board`
- Field with path `ads.history.items[].photos.grz`
- Field with path `ads.history.items[].is_sold`
- Field with path `ads.history.items[].is_closed`
- Field with path `ads.history.items[].vehicle.brand.name`
- Field with path `ads.history.items[].vehicle.model.name`
- Field with path `ads.history.items[].vehicle.identifiers.vin`
- Field with path `ads.history.items[].vehicle.identifiers.chassis`
- Field with path `ads.history.items[].vehicle.year`
- Field with path `ads.history.items[].vehicle.condition`
- Field with path `ads.history.items[].vehicle.wheel.position`
- Field with path `ads.history.items[].vehicle.transmission.type`
- Field with path `ads.history.items[].vehicle.drive.type`
- Field with path `ads.history.items[].vehicle.passport.type`
- Field with path `ads.history.items[].vehicle.doors.count`
- Field with path `ads.history.items[].vehicle.owners.count`
- Field with path `ads.history.items[].vehicle.engine.power.hp`
- Field with path `ads.history.items[].vehicle.engine.volume`
- Field with path `ads.history.items[].vehicle.engine.fuel.type`
- Field with path `ads.history.items[].vehicle.body.type`
- Field with path `ads.history.items[].vehicle.body.color.name`
- Field with path `ads.history.items[].vehicle.mileage`
- Field with path `ads.history.items[].vehicle.is_cleared`

### Changed

- [json-schema][json-schema] `./reports/default/json-schema.json` updated
- `./reports/default/examples/empty.json` updated
- `./reports/default/examples/full.json` updated

## v3.1.0

### Added

- **PHP SDK** method `version` _(returns current package version)_

## v3.0.0

### Removed

- File `./fields/default/examples/blank.json`

### Added

- Repository `Makefile`
- File `./sources/default/json-schema.json` ([json-schema][json-schema] for `./sources/default/sources_list.json`)
- File `./fields/default/json-schema.json` ([json-schema][json-schema] for `./fields/default/fields_list.json`)
- File `./identifiers/default/json-schema.json` ([json-schema][json-schema] for `./identifiers/default/types_list.json`)
- File `./reports/default/json-schema.json` ([json-schema][json-schema] for `./reports/default/examples/*.json`)
- **PHP SDK** method `getFieldsJsonSchema`
- **PHP SDK** method `getSourcesJsonSchema`
- **PHP SDK** method `getIdentifierTypesJsonSchema`
- **PHP SDK** method `getReportJsonSchema`

### Changed

- Branch `v2` marked as outdated (and will no longer supported). Actual branch - `v3`
- Unit tests now uses [json-schema][json-schema] validation
- File `./fields/default/fields_list.json` contains small typo fixes
- File `./fields/default/examples/empty.json` moved into directory `./reports/default/examples`
- File `./fields/default/examples/full.json` moved into directory `./reports/default/examples`
- Each source in `./sources/default/sources_list.json` now contains boolean property `enabled`. Sources `tech.base` and `base.taxi` marked as disabled
- **PHP SDK** method `getReportExample` now accepts 3rd argument `bool $as_array = true` and can returns `array` or `object`
- **PHP SDK** protected method `getJsonFileAsArray` renamed to `getJsonFileContent` and accepts 2nd argument `bool $as_array = true` and can returns `array` or `object`

## v2.13.0

### Added

- `fillable_by` field for fields specification [#34]
- Source `tech.base`
- Source `references.base`
- Source `av.taxi`
- Source `pledge.house`

[#34]:https://github.com/avtocod/specs/issues/34

## v2.12.0

### Added 

- Field with path `repairs.history.items[].assessor.name` [#37]

### Fixed

- Field with path `repairs.history.items[].insurer.name` has a duplicate, one instance has been deleted [#37]

[#37]:https://github.com/avtocod/specs/issues/37

## v2.11.0

### Changed

- Migrate to the [Travis CI][travis-ci]
- **PHP SDK** minimal PHP version now is 7.0 _([version 5.6 is not supported since 31 Dec 2018][php-supported-versions])_
- **PHP SDK** code a little bit refactored for PHP version 7.0

### Added

- **PHP SDK** Static code analyzer `phpstan` installed as `dev` dependency

[php-supported-versions]:http://php.net/supported-versions.php
[travis-ci]:https://travis-ci.org/avtocod/specs

## v2.10.0

### Added

- Vehicle marks specifications
- Vehicle models specifications
- **PHP SDK** object `VehicleMark`
- **PHP SDK** object `VehicleModel`
- **PHP SDK** method `getVehicleMarksSpecification`
- **PHP SDK** method `getVehicleModelsSpecification`

## v2.9.0

### Added

- Field with path `additional_info.vehicle.modifications.was_modificated` [#25]
- Field with path `registration_actions.items[].identifiers.pts` [#27]
- Field with path `registration_actions.items[].identifiers.sts` [#27]
- Field with path `additional_info.vehicle.passport.has_dublicate` [#27]

[#25]:https://github.com/avtocod/specs/issues/25
[#27]:https://github.com/avtocod/specs/issues/27

## v2.8.0

### Added

- Field with path `accidents.has_accidents`
- Field with path `fines.has_fines`

## v2.7.0

### Added

- Field with path `tech_data.brand.logotype.uri`
- Field with path `insurance.osago.items[].date.end`
- Field with path `calculate.osago.price.current.yearly.min`
- Field with path `calculate.osago.price.current.yearly.max`
- Field with path `calculate.osago.price.moscow.yearly.min`
- Field with path `calculate.osago.price.moscow.yearly.max`
- Field with path `calculate.osago.price.moscow_region.yearly.min`
- Field with path `calculate.osago.price.moscow_region.yearly.max`

## v2.6.0

### Added

- Field with path `taxi.history.items[].license.issued`
- Field with path `taxi.history.items[].license.status`
- Field with path `taxi.history.items[].company.address`
- Field with path `taxi.history.items[].number_plate.is_yellow`
- Field with path `taxi.history.items[].vehicle.brand.normalized`
- Field with path `taxi.history.items[].vehicle.model.normalized`
- Field with path `taxi.history.items[].vehicle.color`
- Field with path `taxi.history.items[].vehicle.sts.number`
- Field with path `taxi.history.items[].vehicle.sts.date.receive`
- Field with path `taxi.history.items[].region.code`
- Field with path `taxi.history.items[].cancel.reason`
- Field with path `taxi.history.items[].cancel.note`

## v2.5.0

### Added

- Field with path `leasings.items[].lessor.company.name`
- Field with path `leasings.used_in_leasing`

## v2.4.0

### Added

- Field with path `fines.items[].article.code`
- Field with path `fines.items[].article.description`

## v2.3.0

### Added

- Field with path `accidents.history.items[].org.name` [#12]

## v2.2.0

### Added

- Field with path `accidents.insurance.items[].date.event`
- Field with path `accidents.insurance.items[].insurer.type`
- Field with path `accidents.insurance.items[].accident.description`
- Field with path `accidents.insurance.items[].damage.raw`
- Field with path `accidents.history.items[].damage.raw`

## v2.1.0

### Added

- Field with path `pledges.items[].type` [#9]
- Field with path `pledges.items[].in_pledge` [#9]
- Repository issues templates
- Repository PR template

## v2.0.0

### Added

- Field with path `diagnostic_cards.items[].inspection.place`
- Field with path `restrictions.registration_actions.has_restrictions`
- Field with path `taxi.used_in_taxi`
- Field with path `utilizations.was_utilized`
- Field with path `stealings.is_wanted`
- Field with path `customs.history.items[].specification.raw`
- Report example `./fields/default/examples/full.json`
- Report example `./fields/default/examples/empty.json`
- Source `base.moscow`
- Source `customs.base`

### Changed

- Fields paths now follows next rule - if **path** element contains some iterable data inside, path element ends with `[]`
- Fields types `number` changed to `numeric`
- Field with path `tech_data.engine.volume` types now is `['float']`
- Field with path `tech_data.engine.power.hp` types now is `['float']`
- Field with path `tech_data.engine.power.kw` types now is `['float']`
- Field with path `calculate.tax.moscow.yearly.amount` types now is `['integer']`
- Field with path `calculate.tax.regions.yearly.amount` types now is `['integer']`
- Field with path `calculate.osago.coefficients.regional.value` types now is `['float']`
- Field with path `calculate.osago.price.current.yearly.amount` types now is `['integer']`
- Field with path `calculate.osago.price.moscow.yearly.amount` types now is `['integer']`
- Field with path `calculate.osago.price.moscow_region.yearly.amount` types now is `['integer']`
- Field with path `accidents.history.items[].vehicle.year` types now is `['integer']`
- Field with path `fines.items[].amount.value` types now is `['float']`
- Field with path `fines.items[].amount.total` types now is `['float']`
- Field with path `fines.items[].discount.percent` types now is `['float']`
- Field with path `car_price.items[].engine.volume` types now is `['float']`
- File `identifiers_types_list.json` renamed to `types_list.json`
- Internal structure in file `types_list.json`
- Internal structure in file `sources_list.json`
- Readme file totally re-writed
- PHP SDK require PHP version `5.6.4` and above
- PHP SDK now require `illuminate/support` package
- PHP SDK "specifications" methods in class `Specifications` now returns Collections of typed objects (array before)
- Minimal `phpunit/phpunit` version now is `5.7.10`
- Tests updated
- CI configuration updated

### Removed

- File `./CODE_OF_CONDUCT.md`
- File `./CONTRIBUTING.md`
- File `./.styleci.yml` (configuration transferred into `styleci.io`)
- Fields **names**
- Report example `./fields/default/examples/blank.json`
- Report example `./fields/default/examples/WBAFG41000L194195.json`
- Report example `./fields/default/examples/Z94CB41AAGR323020.json`
- Report example `./fields/default/examples/A1111111111111111.json`

[keepachangelog]:https://keepachangelog.com/en/1.0.0/
[semver]:https://semver.org/spec/v2.0.0.html
[json-schema]:https://json-schema.org
[#51]:https://github.com/avtocod/specs/issues/51
[#12]:https://github.com/avtocod/specs/issues/12
[#9]:https://github.com/avtocod/specs/issues/9
