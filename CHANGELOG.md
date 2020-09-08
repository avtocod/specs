# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## UNRELEASED

### Changed

- Extend pattern with `*` for definition `engine_number` in `./reports/default/json-schema.json`

## v3.45.0

### Changed

- Extend pattern with `*` for definitions `vin_code` in `./reports/default/json-schema.json`
- Extend pattern with `*` for definitions `grz_code` in `./reports/default/json-schema.json`
- Extend pattern with `*` for definitions `sts_code` in `./reports/default/json-schema.json`
- Extend pattern with `*` for definitions `pts_code` in `./reports/default/json-schema.json`
- Extend pattern with `*` for definitions `body_code` in `./reports/default/json-schema.json`
- Extend pattern with `*` for definitions `chassis_code` in `./reports/default/json-schema.json`

### Fixed

- Pattern for definitions `vin_code` in `./reports/default/json-schema.json`
- Pattern for definitions `grz_code` in `./reports/default/json-schema.json`
- Pattern for definitions `sts_code` in `./reports/default/json-schema.json`
- Pattern for definitions `pts_code` in `./reports/default/json-schema.json`
- Pattern for definitions `body_code` in `./reports/default/json-schema.json`
- Pattern for definitions `chassis_code` in `./reports/default/json-schema.json`
- Pattern for definitions `tin_code` in `./reports/default/json-schema.json`
- Pattern for definitions `engine_number` in `./reports/default/json-schema.json`
- Pattern for definitions `brand_unique_id` in `./reports/default/json-schema.json`
- Pattern for definitions `model_unique_id` in `./reports/default/json-schema.json`
- Pattern for definitions `phone_number` in `./reports/default/json-schema.json`
- Pattern for definitions `datetime` in `./reports/default/json-schema.json`
- Pattern for definitions `date` in `./reports/default/json-schema.json`
- Pattern for field with path `additional_info.owner.geo.postal_code` in `./reports/default/json-schema.json`

## v3.44.0

### Added

- Field with path `ownership.history.items[].owner.company.name`
- Field with path `ownership.history.items[].owner.company.kpp`
- Field with path `ownership.history.items[].owner.company.ogrn`

## v3.43.0

### Added

- Field with path `ownership.history.items[].owner.company.tin`

## v3.42.0

### Changed

- Field with path `ownership.history.items[].date.start` also fillable by `base`, `base.ext`
- Field with path `ownership.history.items[].date.end` also fillable by `base`, `base.ext`
- Field with path `ownership.history.items[].owner.type` also fillable by `base`, `base.ext`
- Field with path `ownership.history.items[].last_operation.code` also fillable by `base`, `base.ext`, `base.alt`
- Field with path `ownership.history.items[].last_operation.description` also fillable by `base`, `base.ext`, `base.alt`

## v3.41.1

### Fixed

- Fixed typo of possible value for `commercial_use.items[].company.type`

## v3.41.0

### Added

- Source `recall.campaigns.registry`
- Field with path `recall_campaigns.items[].date`
- Field with path `recall_campaigns.items[].company.name`
- Field with path `recall_campaigns.items[].description.reason`
- Field with path `recall_campaigns.items[].description.recommendation`
- Field with path `recall_campaigns.items[].vehicle.brand`
- Field with path `recall_campaigns.items[].vehicle.model`
- Field with path `recall_campaigns.items[].news.url`
- Field with path `recall_campaigns.count`

## v3.40.1

### Fixed

- Missing field with path `commercial_use.count`

## v3.40.0

### Added

- Source `carsharing.registry`
- Field with path `commercial_use.items[].service.name`
- Field with path `commercial_use.items[].service.url`
- Field with path `commercial_use.items[].company.name`
- Field with path `commercial_use.items[].company.tin`
- Field with path `commercial_use.items[].company.type`

## v3.39.0

### Added

- New possible value `Agency` for `repairs.history.items[].repairer.type` field [#143]
- New possible value `RETRO CALCULATION` for `repairs.history.items[].task_process` field [#143]
- Additional pattern for electronic vehicle passport in `pts_code` definition [#143]
- Field with path `accidents.history.date.update`

## v3.38.0

### Added

- Source `references.rsa`
- Field with path `additional_info.catalog.rsa.items[].code.rsa`
- Field with path `additional_info.catalog.rsa.items[].code.transdekra`
- Field with path `additional_info.catalog.rsa.items[].code.vehicle`
- Field with path `additional_info.catalog.rsa.items[].relevance`
- Field with path `additional_info.catalog.rsa.items[].vehicle.type`
- Field with path `additional_info.catalog.rsa.items[].vehicle.brand.name`
- Field with path `additional_info.catalog.rsa.items[].vehicle.model.name`
- Field with path `additional_info.catalog.rsa.items[].vehicle.modifications.name`
- Field with path `additional_info.catalog.rsa.items[].vehicle.transmission.type`
- Field with path `additional_info.catalog.rsa.items[].vehicle.drive.type`
- Field with path `additional_info.catalog.rsa.items[].vehicle.engine.type`
- Field with path `additional_info.catalog.rsa.items[].vehicle.engine.power.hp`
- Field with path `additional_info.catalog.rsa.items[].vehicle.engine.volume`
- Field with path `additional_info.catalog.rsa.items[].vehicle.doors.count`
- Field with path `additional_info.catalog.rsa.items[].vehicle.seats.count`
- Field with path `additional_info.catalog.rsa.items[].vehicle.weight.max`
- Field with path `additional_info.catalog.rsa.items[].vehicle.category.code`
- Field with path `additional_info.catalog.rsa.items[].vehicle.body.type`
- Field with path `additional_info.catalog.rsa.items[].vehicle.manufactured.year.start`
- Field with path `additional_info.catalog.rsa.items[].vehicle.manufactured.year.end`

## v3.37.0

### Added

- Source `ramiosago.alt`
- Source `ramiosago.alt.ext`

### Changed

- Field with path `insurance.osago.items[].policy.series` also fillable by `ramiosago.alt`, `ramiosago.alt.ext` sources
- Field with path `insurance.osago.items[].policy.number` also fillable by `ramiosago.alt`, `ramiosago.alt.ext` sources
- Field with path `insurance.osago.items[].insurer.name` also fillable by `ramiosago.alt`, `ramiosago.alt.ext` sources
- Field with path `insurance.osago.items[].restrictions.type` also fillable by `ramiosago.alt`, `ramiosago.alt.ext` sources
- Field with path `insurance.osago.items[].date.start` also fillable by `ramiosago.alt.ext` source
- Field with path `insurance.osago.items[].date.end` also fillable by `ramiosago.alt.ext` source
- Field with path `insurance.osago.items[].policy.is_active` also fillable by `ramiosago.alt.ext` source

## v3.36.0

### Changed

- Source `carprice` marked as disabled

## v3.35.0

### Changed

- Field with path `mileages.items[].date.event` also fillable by `images.archive` source
- Field with path `mileages.items[].mileage` also fillable by `images.archive` source
- Field with path `mileages.items[].date.event` also fillable by `customs.base` source
- Field with path `mileages.items[].mileage` also fillable by `customs.base` source
- Disabled source with name `base.moscow`

## v3.34.0

### Changed

- Field with path `ads.history.items[].photos.board` also fillable by `images.archive` source
- Field with path `ads.history.items[].photos.grz` also fillable by `images.archive` source
- Field with path `images.photos.items[].vehicle.brand.name` is not fillable by `images.archive` source now
- Field with path `images.photos.items[].vehicle.model.name` is not fillable by `images.archive` source now

## v3.33.0

### Added

- Field with path `taxi.history.items[].date.cancel`

## v3.32.0

### Added

- Field with path `accidents.history.items[].participants.total`

## v3.31.0

### Added

- Source `fines.madiampp`
- Field with path `fines.items[].location.raw`

### Changed

- Field with path `fines.items[].date.event` also fillable by `fines.madiampp` source
- Field with path `fines.items[].article.code` also fillable by `fines.madiampp` source
- Field with path `fines.items[].article.description` also fillable by `fines.madiampp` source
- Field with path `fines.items[].description` also fillable by `fines.madiampp` source
- Field with path `fines.items[].amount.total` also fillable by `fines.madiampp` source
- Field with path `fines.items[].discount.percent` also fillable by `fines.madiampp` source
- Field with path `fines.items[].discount.date.end` also fillable by `fines.madiampp` source
- Field with path `fines.items[].is_paid` also fillable by `fines.madiampp` source
- Field with path `fines.has_fines` also fillable by `fines.madiampp` source

## v3.30.0

### Changed

- CI completely moved from "Travis CI" to "Github Actions" _(travis builds disabled)_
- **PHP SDK** maximal `illuminate/*` package versions now is `7.*`
- **PHP SDK** minimal required PHP version now is `7.2`
- **PHP SDK** minimal required `phpunit/phpunit` version now is `~7.5`
- **PHP SDK** minimal required `illuminate/*` package versions now is `^5.6`
- **PHP SDK** Tests was updated. Now it's not using deprecated `PHPUnit` assertions

## v3.29.0

### Added

- Field with path `tech_data.generations[].name`
- Field with path `tech_data.generations[].is_restyling`
- Field with path `tech_data.generations[].years.start`
- Field with path `tech_data.generations[].years.end`
- Field with path `tech_data.generations[].bodies[].type`
- Field with path `tech_data.generations[].bodies[].modifications[].name`
- Field with path `tech_data.generations[].bodies[].modifications[].engine.fuel.type`
- Field with path `tech_data.generations[].bodies[].modifications[].engine.power.hp`
- Field with path `tech_data.generations[].bodies[].modifications[].engine.volume`
- Field with path `tech_data.generations[].bodies[].modifications[].transmission.type`
- Field with path `tech_data.generations[].bodies[].modifications[].drive.type`

## v3.28.0

### Added

- Source `images.archive`

### Changed

- Field with path `images.photos.items[].uri` also fillable by `images.archive` source
- Field with path `images.photos.items[].date.issued` also fillable by `images.archive` source
- Field with path `images.photos.items[].vehicle.model.name` also fillable by `images.archive` source
- Field with path `images.photos.items[].vehicle.brand.name` also fillable by `images.archive` source
- Field with path `ads.history.items[].geo` also fillable by `images.archive` source
- Field with path `ads.history.items[].text` also fillable by `images.archive` source
- Field with path `ads.history.items[].date.publish` also fillable by `images.archive` source
- Field with path `ads.history.items[].price.value` also fillable by `images.archive` source
- Field with path `ads.history.items[].photos.local` also fillable by `images.archive` source
- Field with path `ads.history.items[].vehicle.year` also fillable by `images.archive` source
- Field with path `ads.history.items[].vehicle.mileage` also fillable by `images.archive` source
- Field with path `ads.history.items[].vehicle.model.name` also fillable by `images.archive` source
- Field with path `ads.history.items[].vehicle.brand.name` also fillable by `images.archive` source
- Field with path `ads.history.items[].vehicle.identifiers.vin` also fillable by `images.archive` source

## v3.27.0

### Added

- Example for `repairs` block with `Bodyshop` values for `repairs.history.items[].repairer.type`
- Possible value `Bodyshop` for a field with path `repairs.history.items[].repairer.type`

### Changed

- Description for a field with path `repairs.history.items[].repairer.type` in `./fields/default/fields_list.json`

## v3.26.1

### Fixed

- Fix description for a field with path `registration_actions.items[].attributes` in `./fields/default/fields_list.json` [#127]
- Fix description for a field with path `registration_actions.items[].usage_allowed` in `./fields/default/fields_list.json` [#127]
- Fix description for a field with path `registration_actions.has_annulment` in `./reports/default/json-schema.json` [#127]
- Fix description for a field with path `ownership.history.items[].last_operation.code` in `./reports/default/json-schema.json` [#127]
- Fix description for a field with path `ownership.history.items[].last_operation.description` in `./reports/default/json-schema.json` [#127]
- Fix description for a field with path `tech_data.engine.standarts.emission.euro` in `./reports/default/json-schema.json` [#127]
- Fix description for a field with path `additional_info.vehicle.segment.euro.code` in `./reports/default/json-schema.json` [#127]
- Fix description for a field with path `additional_info.vehicle.segment.euro.description` in `./reports/default/json-schema.json` [#127]

[#127]:https://github.com/avtocod/specs/issues/127

## v3.26.0

### Added

- Field with path `taxi.history.items[].date.actual` [#125]

[#125]:https://github.com/avtocod/specs/issues/125

## v3.25.1

### Added

- Example for `pledges` block with `REFUSE` values for `pledges.items[].pledgors[].name`, `pledges.items[].pledgees[].name`

### Fixed

- Replaced `oneOf` keyword with `anyOf` for `pledges.items[].pledgors[].name`, `pledges.items[].pledgees[].name` in `./reports/default/json-schema.json`

## v3.25.0

### Added

- References value `REFUSE` in `pledges.items[].pledgors[].name` [#122]
- References value `REFUSE` in `pledges.items[].pledgees[].name` [#122]

[#122]:https://github.com/avtocod/specs/issues/122

## v3.24.0

### Changed

- Field with path `identifiers.vehicle.pts` also fillable by `base` source [#121]
- Field with path `tech_data.engine.number` also fillable by `base` source [#121]
- Field with path `tech_data.engine.model.name` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.sts.date.receive` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.passport.date.receive` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.passport.has_dublicate` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.passport.number` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.passport.org.name` also fillable by `base` source [#121]
- Field with path `additional_info.vehicle.notes` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].identifiers.pts` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].owner.org.name` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].owner.org.tin` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].owner.org.kpp` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].owner.org.ogrn` also fillable by `base` source [#121]
- Field with path `registration_actions.items[].attributes` also fillable by `base` source [#121]
- Field with path `registration_actions.has_annulment` also fillable by `base` source [#121]
- Field with path `leasings.items[].tin` also fillable by `base` source [#121]
- Field with path `leasings.items[].company.name` also fillable by `base` source [#121]
- Field with path `leasings.items[].lessor.company.name` also fillable by `base` source [#121]
- Field with path `leasings.items[].date.event` also fillable by `base` source [#121]
- Field with path `leasings.used_in_leasing` also fillable by `base` source [#121]

[#121]:https://github.com/avtocod/specs/issues/121

## v3.23.1

### Changed

- `SpecificationsTest::testFieldsListAndReportSchemaAreSame` improved [#111]

### Fixed

- Field with path `identifiers.vehicle.body` also fallible by `gibdd.history` source in `./fields/default/fields_list.json` [#111]

[#111]:https://github.com/avtocod/specs/issues/111

## v3.23.0

### Added

- Source `pledge.fnp` [#117]

### Changed

- Field with path `pledges.items[].date.event` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].number` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].type` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].in_pledge` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgors[].name` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgors[].type` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgors[].dob` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgees[].name` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgees[].type` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].pledgees[].dob` also fillable by `pledge.fnp` source [#117]
- Field with path `pledges.items[].data` also fillable by `pledge.fnp` source [#117]

[#117]:https://github.com/avtocod/specs/issues/117

## v3.22.0

### Changed

- Updated vehicles marks and models specs [#113]

[#113]:https://github.com/avtocod/specs/issues/113

## v3.21.0

### Added

- Source `regactions.registry` [#115]
- Field with path `tech_data.engine.standarts.emission.euro` [#115]
- Field with path `additional_info.vehicle.segment.euro.code` [#115]
- Field with path `additional_info.vehicle.segment.euro.description` [#115]
- Field with path `registration_actions.items[].actuality.date` [#115]

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `regactions.registry` source [#115]
- Field with path `identifiers.vehicle.body` also fillable by `regactions.registry` source [#115]
- Field with path `identifiers.vehicle.chassis` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.brand.name.original` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.body.number` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.year` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.engine.fuel.type` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.engine.number` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.engine.volume` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.engine.power.hp` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.weight.netto` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.weight.max` also fillable by `regactions.registry` source [#115]
- Field with path `tech_data.wheel.position` also fillable by `regactions.registry` source [#115]
- Field with path `additional_info.vehicle.category.code` also fillable by `regactions.registry` source [#115]
- Field with path `additional_info.vehicle.category.description` also fillable by `regactions.registry` source [#115]
- Field with path `additional_info.vehicle.owner.type` also fillable by `regactions.registry` source [#115]
- Field with path `additional_info.vehicle.owner.geo` also fillable by `regactions.registry` source [#115]
- Field with path `ownership.history.items[].date.start` also fillable by `regactions.registry` source [#115]
- Field with path `ownership.history.items[].owner.type` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].date.start` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].date.end` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].owner.type` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].owner.org.name` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].owner.org.tin` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].type` also fillable by `regactions.registry` source [#115]
- Field with path `registration_actions.items[].geo` also fillable by `regactions.registry` source [#115]

[#115]:https://github.com/avtocod/specs/issues/115

## v3.20.0

### Added

- Source `base.alt` [#109]

### Changed

- Field with path `insurance.osago.items[].policy.number` also fillable by `base`, `base.ext`, `base.alt` [#101]
- Field with path `insurance.osago.items[].policy.series` also fillable by `base`, `base.ext`, `base.alt` [#101]
- Field with path `insurance.osago.items[].date.start` also fillable by `base`, `base.ext`, `base.alt` [#101]
- Field with path `insurance.osago.items[].date.end` also fillable by `base`, `base.ext`, `base.alt` [#101]
- Field with path `insurance.osago.items[].insurer.name` also fillable by `base`, `base.ext`, `base.alt` [#101]
- Field with path `additional_info.vehicle.category.code` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.owner.type` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.owner.phone_number` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.owner.geo` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.passport.number` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.passport.org.name` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.sts.date.receive` also fillable by `base.alt` [#109]
- Field with path `additional_info.vehicle.passport.date.receive` also fillable by `base.alt` [#109]
- Field with path `calculate.osago.coefficients.regional.value` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.body` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.chassis` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.pts` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.reg_num` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.sts` also fillable by `base.alt` [#109]
- Field with path `identifiers.vehicle.vin` also fillable by `base.alt` [#109]
- Field with path `ownership.history.items[].date.start` also fillable by `base.alt` [#109]
- Field with path `ownership.history.items[].date.end` also fillable by `base.alt` [#109]
- Field with path `ownership.history.items[].owner.type` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].date.end` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].date.start` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].geo` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].identifiers.pts` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].identifiers.sts` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.org.kpp` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.org.name` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.org.ogrn` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.org.tin` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.phone_number` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].owner.type` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].reg_num` also fillable by `base.alt` [#109]
- Field with path `registration_actions.items[].type` also fillable by `base.alt` [#109]
- Field with path `tech_data.body.color.name` also fillable by `base.alt` [#109]
- Field with path `tech_data.body.color.type` also fillable by `base.alt` [#109]
- Field with path `tech_data.body.number` also fillable by `base.alt` [#109]
- Field with path `tech_data.brand.name.original` also fillable by `base.alt` [#109]
- Field with path `tech_data.chassis.number` also fillable by `base.alt` [#109]
- Field with path `tech_data.drive.type` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.fuel.type` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.model.name` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.number` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.power.hp` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.power.kw` also fillable by `base.alt` [#109]
- Field with path `tech_data.engine.volume` also fillable by `base.alt` [#109]
- Field with path `tech_data.type.name` also fillable by `base.alt` [#109]
- Field with path `tech_data.weight.max` also fillable by `base.alt` [#109]
- Field with path `tech_data.weight.netto` also fillable by `base.alt` [#109]
- Field with path `tech_data.year` also fillable by `base.alt` [#109]
- Field with path `tech_data.wheel.position` also fillable by `base.alt` [#109]

[#101]:https://github.com/avtocod/specs/issues/101
[#109]:https://github.com/avtocod/specs/issues/109

## v3.19.0

### Added

- Source `dtp.registry` [#105]

### Changed

- Field `additional_info.vehicle.owner.phone_number` description [#107]
- Field with path `accidents.history.items[].number` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].accident.date` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].type` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].state` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].vehicle.brand.name` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].vehicle.model.name` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].vehicle.year` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].geo` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].damage.points` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].damage.codes` also fillable by `dtp.registry` [#105]
- Field with path `accidents.history.items[].actuality.date` also fillable by `dtp.registry` [#105]

[#105]:https://github.com/avtocod/specs/issues/105
[#107]:https://github.com/avtocod/specs/issues/107

## v3.18.0

### Added

- Field with path `accidents.history.items[].actuality.date` [#103]

[#103]:https://github.com/avtocod/specs/issues/103

## v3.17.0

### Added

- Source `fines.alt` [#97]

### Changed

- Field with path `fines.items[].date.event` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].article.code` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].article.description` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].description` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].vendor.name` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].amount.value` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].amount.total` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].discount.percent` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].discount.date.end` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].is_paid` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.user.name` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.user.tin` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.user.kpp` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.bank.account.number` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.bank.name` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.bank.bik` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.payment.purpose` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.kbk` also fillable by `fines.alt` [#97]
- Field with path `fines.items[].wire.okato` also fillable by `fines.alt` [#97]
- Field with path `fines.has_fines` also fillable by `fines.alt` [#97]

[#97]:https://github.com/avtocod/specs/issues/97

## v3.16.0

### Added

- Source `ads.price` [#89]
- Field with path `market_prices.ads.items[].amount.max` [#89]
- Field with path `market_prices.ads.items[].amount.min` [#89]
- Field with path `market_prices.ads.items[].amount.optimal` [#89]
- Field with path `market_prices.ads.items[].currency.type` [#89]
- GitHub actions for a tests running
- `@covers` annotations for tests

[#89]:https://github.com/avtocod/specs/issues/89

### Changed

- Maximal `illuminate/support` packages version now is `6.*`
- Field with path `mileages.items[].filled_by.source` now may have value `customs.base` [#94]

[#94]:https://github.com/avtocod/specs/issues/94

## v3.15.1

### Fixed

- Fixed typo of possible value for `service_history.items[].service.type`

## v3.15.0

### Added

- Field with path `mileages.items[].filled_by.source` [#91]

[#91]:https://github.com/avtocod/specs/issues/91

## v3.14.0

### Added

- Field with path `registration_actions.items[].owner.phone_number` [#83]

[#83]:https://github.com/avtocod/specs/issues/83

## v3.13.0

### Added

- Source `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].policy.is_active` [#86]

### Changed

- Field with path `insurance.osago.items[].policy.number` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].policy.series` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].restrictions.type` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].date.end` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].date.start` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].insurer.name` also fillable by `ramiosago.base.ext` [#86]
- Field with path `insurance.osago.items[].number` also fillable by `ramiosago.base.ext` [#86]

### Fixed

- Field with path `insurance.osago.items[].date.end` also fillable by `ramiosago.base` in `fields_list.json` [#86]
- Field with path `insurance.osago.items[].date.start` also fillable by `ramiosago.base` in `fields_list.json` [#86]
- Makefile task `test-php` now run only `composer test` command. It's fix double `phpstan` check call

[#86]:https://github.com/avtocod/specs/issues/86

## v3.12.0

### Added

- Source `service.history` [#79]
- Field with path `service_history.items[].dealer.name` [#79]
- Field with path `service_history.items[].dealer.branch.name` [#79]
- Field with path `service_history.items[].date.start` [#79]
- Field with path `service_history.items[].date.end` [#79]
- Field with path `service_history.items[].amount.value` [#79]
- Field with path `service_history.items[].amount.currency` [#79]
- Field with path `service_history.items[].type` [#79]
- Field with path `service_history.items[].service.type` [#79]
- Field with path `service_history.items[].service.content` [#79]
- Field with path `service_history.items[].service.spare_parts` [#79]
- Field with path `service_history.items[].service.recommendations` [#79]
- Field with path `service_history.items[].service.is_planned` [#79]
- Field with path `service_history.items[].sale.is_credit` [#79]
- Field with path `service_history.items[].sale.is_new` [#79]
- Field with path `service_history.items[].equipment.content` [#79]
- Field with path `service_history.items[].insurance.type` [#79]
- Field with path `service_history.items[].insurance.date.start` [#79]
- Field with path `service_history.items[].insurance.date.end` [#79]
- Field with path `service_history.items[].client.type` [#79]
- Field with path `service_history.items[].geo` [#79]
- Field with path `service_history.items[].vehicle.brand.name` [#79]
- Field with path `service_history.items[].vehicle.model.name` [#79]
- Field with path `service_history.items[].vehicle.year` [#79]
- Field with path `service_history.items[].vehicle.mileage` [#79]
- Field with path `service_history.items[].vehicle.body.doors` [#79]
- Field with path `service_history.items[].vehicle.body.type` [#79]
- Field with path `service_history.items[].vehicle.body.color` [#79]
- Field with path `service_history.items[].vehicle.engine.number` [#79]
- Field with path `service_history.items[].vehicle.engine.type` [#79]
- Field with path `service_history.items[].vehicle.engine.volume` [#79]
- Field with path `service_history.items[].vehicle.engine.power.hp` [#79]
- Field with path `service_history.items[].vehicle.transmission.type` [#79]
- Field with path `service_history.items[].vehicle.wheel.position` [#79]
- Field with path `service_history.items[].vehicle.drive.type` [#79]
- Field with path `service_history.items[].vehicle.notes` [#79]
- Field with path `service_history.items[].vehicle.equipment.type` [#79]
- Field with path `service_history.items[].vehicle.identifiers.body` [#79]
- Field with path `service_history.items[].vehicle.identifiers.vin` [#79]
- Field with path `service_history.items[].vehicle.identifiers.chassis` [#79]

[#79]:https://github.com/avtocod/specs/issues/79

## v3.11.0

### Added

- Field with path `fines.items[].date.accident` [#81]

[#81]:https://github.com/avtocod/specs/issues/81

## v3.10.1

### Changed

- Description for field `additional_info.vehicle.owner.phone_number` [#77]

## v3.10.0

### Added

- Source `references.transdekra` [#71]
- Field with path `additional_info.catalog.transdekra.items[].rsa_code` [#71]
- Field with path `additional_info.catalog.transdekra.items[].modification_id` [#71]
- Field with path `additional_info.catalog.transdekra.items[].relevance` [#71]
- Source `gibdd.fines` [#73]
- Field with path `fines.items[].photos[].type` [#73]
- Field with path `fines.items[].photos[].uri` [#73]
- Field with path `additional_info.vehicle.owner.phone_number` [#75]
- Field with path `additional_info.vehicle.owner.geo.postal_code` [#75]

### Changed

- Field with path `fines.items[].date.event` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].article.code` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].article.description` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].description` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].vendor.name` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].amount.value` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].amount.total` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].discount.percent` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].discount.date.end` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].is_paid` also fillable by `gibdd.fines` [#73]
- Field with path `fines.items[].wire.kbk` also fillable by `gibdd.fines` [#73]
- Field with path `fines.has_fines` also fillable by `gibdd.fines` [#73]

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
