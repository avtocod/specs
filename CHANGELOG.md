# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog][keepachangelog] and this project adheres to [Semantic Versioning][semver].

## v3.124.0

### Added

- Field with path `insurance.osago.items[].date.cancel`
- Field with path `insurance.osago.items[].policy_replaced.series`
- Field with path `insurance.osago.items[].policy_replaced.number`
- Field with path `insurance.osago.items[].policy_replacement.series`
- Field with path `insurance.osago.items[].policy_replacement.number`

## v3.123.0

### Added

- Vehicle marks and models specs

## v3.122.0

### Changed

- Field with path `registration_actions.items[].usage_allowed` also fillable by `base.basalt`

## v3.121.0

### Fixed

- Field with path `tech_data.date.update` also fillable by `base.basalt`
- Field with path `identifiers.vehicle.chassis` also fillable by `base.basalt`
- Field with path `customs.history.date.update` also fillable by `base.basalt`
- Field with path `ownership.history.date.update` also fillable by `base.basalt`
- Field with path `registration_actions.date.update` also fillable by `base.basalt`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.date.update` also fillable by `base.basalt`

## v3.120.0

### Added

- Source `base.basalt`
- Field with path `restrictions.registration_actions.items[].restrict.contact`
- Field with path `customs.history.items[].utilization_tax.status`

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `base.basalt`
- Field with path `identifiers.vehicle.reg_num` also fillable by `base.basalt`
- Field with path `identifiers.vehicle.pts` also fillable by `base.basalt`
- Field with path `identifiers.vehicle.body` also fillable by `base.basalt`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `base.basalt`
- Field with path `identifiers_masked.vehicle.reg_num` also fillable by `base.basalt`
- Field with path `identifiers_masked.vehicle.pts` also fillable by `base.basalt`
- Field with path `identifiers_masked.vehicle.body` also fillable by `base.basalt`
- Field with path `tech_data.manufacturer.name` also fillable by `base.basalt`
- Field with path `tech_data.brand.name.original` also fillable by `base.basalt`
- Field with path `tech_data.model.name.original` also fillable by `base.basalt`
- Field with path `tech_data.type.name` also fillable by `base.basalt`
- Field with path `tech_data.type.type_id` also fillable by `base.basalt`
- Field with path `tech_data.type.code` also fillable by `base.basalt`
- Field with path `tech_data.body.color.name` also fillable by `base.basalt`
- Field with path `tech_data.year` also fillable by `base.basalt`
- Field with path `tech_data.engine.fuel.type` also fillable by `base.basalt`
- Field with path `tech_data.engine.fuel.type_id` also fillable by `base.basalt`
- Field with path `tech_data.engine.number` also fillable by `base.basalt`
- Field with path `tech_data.engine.model.name` also fillable by `base.basalt`
- Field with path `tech_data.engine.volume` also fillable by `base.basalt`
- Field with path `tech_data.engine.power.hp` also fillable by `base.basalt`
- Field with path `tech_data.engine.power.kw` also fillable by `base.basalt`
- Field with path `tech_data.engine.standarts.emission.euro` also fillable by `base.basalt`
- Field with path `tech_data.weight.netto` also fillable by `base.basalt`
- Field with path `tech_data.weight.max` also fillable by `base.basalt`
- Field with path `tech_data.transmission.type` also fillable by `base.basalt`
- Field with path `tech_data.transmission.type_id` also fillable by `base.basalt`
- Field with path `tech_data.drive.type` also fillable by `base.basalt`
- Field with path `tech_data.drive.type_id` also fillable by `base.basalt`
- Field with path `tech_data.wheel.position` also fillable by `base.basalt`
- Field with path `tech_data.wheel.position_id` also fillable by `base.basalt`
- Field with path `additional_info.vehicle.category.code` also fillable by `base.basalt`
- Field with path `additional_info.vehicle.category.description` also fillable by `base.basalt`
- Field with path `additional_info.vehicle.passport.number` also fillable by `base.basalt`
- Field with path `additional_info.vehicle.techreglament_category.code` also fillable by `base.basalt`
- Field with path `additional_info.vehicle.techreglament_category.description` also fillable by `base.basalt`
- Field with path `ownership.history.items[].date.start` also fillable by `base.basalt`
- Field with path `ownership.history.items[].date.end` also fillable by `base.basalt`
- Field with path `ownership.history.items[].owner.type` also fillable by `base.basalt`
- Field with path `ownership.history.items[].last_operation.code` also fillable by `base.basalt`
- Field with path `ownership.history.items[].last_operation.description` also fillable by `base.basalt`
- Field with path `registration_actions.items[].date.start` also fillable by `base.basalt`
- Field with path `registration_actions.items[].identifiers.pts` also fillable by `base.basalt`
- Field with path `registration_actions.items[].reg_num` also fillable by `base.basalt`
- Field with path `registration_actions.items[].type` also fillable by `base.basalt`
- Field with path `registration_actions.items[].code` also fillable by `base.basalt`
- Field with path `registration_actions.items[].actuality.date` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].date.added` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].initiator.name` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].initiator.region.name` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].restrict.type` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].restrict.reason` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].restrict.number` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].restrict.executive_procedure` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.items[].actuality.date` also fillable by `base.basalt`
- Field with path `restrictions.registration_actions.has_restrictions` also fillable by `base.basalt`
- Field with path `customs.history.items[].date.event` also fillable by `base.basalt`
- Field with path `customs.history.items[].document.number` also fillable by `base.basalt`
- Field with path `customs.history.items[].org.name` also fillable by `base.basalt`
- Field with path `customs.history.items[].country.from.name` also fillable by `base.basalt`

## v3.119.0

### Changed

- Extended enum with `M1G`, `M2G`, `M3G`, `N1G`, `N2G` и `N3G` values for field `additional_info.vehicle.techreglament_category.code` in `./reports/default/json-schema.json`

## v3.118.0

### Changed

- Field with path `tech_data.engine.standarts.emission.euro` also fillable by `base` and `base.ext`

## v3.117.0

### Changed

- Field with path `tech_data.transmission.type` also fillable by `base` and `base.ext`
- Field with path `tech_data.transmission.type_id` also fillable by `base` and `base.ext`
- Field with path `additional_info.vehicle.techreglament_category.code` also fillable by `base` and `base.ext`
- Field with path `additional_info.vehicle.techreglament_category.description` also fillable by `base` and `base.ext`

## v3.116.0

### Added

- Source `gibdd.history.registry`

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `gibdd.history.registry`
- Field with path `identifiers.vehicle.reg_num` also fillable by `gibdd.history.registry`
- Field with path `identifiers.vehicle.sts` also fillable by `gibdd.history.registry`
- Field with path `identifiers.vehicle.pts` also fillable by `gibdd.history.registry`
- Field with path `identifiers.vehicle.body` also fillable by `gibdd.history.registry`
- Field with path `identifiers.vehicle.chassis` also fillable by `gibdd.history.registry`
- Field with path `identifiers.manufacture.vin` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.reg_num` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.sts` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.pts` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.body` also fillable by `gibdd.history.registry`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.fuel.type` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.fuel.type_id` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.number` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.model.name` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.volume` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.power.hp` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.power.kw` also fillable by `gibdd.history.registry`
- Field with path `tech_data.body.color.name` also fillable by `gibdd.history.registry`
- Field with path `tech_data.engine.standarts.emission.euro` also fillable by `gibdd.history.registry`
- Field with path `tech_data.brand.name.original` also fillable by `gibdd.history.registry`
- Field with path `tech_data.type.code` also fillable by `gibdd.history.registry`
- Field with path `tech_data.type.name` also fillable by `gibdd.history.registry`
- Field with path `tech_data.type.type_id` also fillable by `gibdd.history.registry`
- Field with path `tech_data.year` also fillable by `gibdd.history.registry`
- Field with path `tech_data.wheel.position` also fillable by `gibdd.history.registry`
- Field with path `tech_data.wheel.position_id` also fillable by `gibdd.history.registry`
- Field with path `tech_data.wheel.position_code` also fillable by `gibdd.history.registry`
- Field with path `tech_data.drive.type` also fillable by `gibdd.history.registry`
- Field with path `tech_data.drive.type_id` also fillable by `gibdd.history.registry`
- Field with path `tech_data.transmission.type` also fillable by `gibdd.history.registry`
- Field with path `tech_data.transmission.type_id` also fillable by `gibdd.history.registry`
- Field with path `tech_data.date.update` also fillable by `gibdd.history.registry`
- Field with path `additional_info.vehicle.category.code` also fillable by `gibdd.history.registry`
- Field with path `additional_info.vehicle.category.description` also fillable by `gibdd.history.registry`
- Field with path `additional_info.vehicle.passport.org.name` also fillable by `gibdd.history.registry`
- Field with path `additional_info.vehicle.passport.number` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].code` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].type` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].date.start` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].date.end` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].reg_num` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].identifiers.pts` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].identifiers.sts` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].owner.type` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].usage_allowed` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.items[].actuality.date` also fillable by `gibdd.history.registry`
- Field with path `registration_actions.date.update` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.items[].date.start` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.items[].date.end` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.items[].owner.type1` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.items[].last_operation.code` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.items[].last_operation.description` also fillable by `gibdd.history.registry`
- Field with path `ownership.history.date.update` also fillable by `gibdd.history.registry`

## v3.115.0

### Added

- Source `driver.mileages`
- Field with path `additional_info.driver.mileages.average_annual.value`
- Field with path `additional_info.driver.mileages.average_annual.is_calculated`
- Field with path `additional_info.driver.mileages.average_annual.calculation_options.period.start`
- Field with path `additional_info.driver.mileages.average_annual.calculation_options.period.end`
- Field with path `additional_info.driver.mileages.average_annual.calculation_options.vehicle.count`
- Field with path `additional_info.driver.mileages.average_annual.calculation_options.mileages.count`

## v3.114.0

### Added

- Source `eaisto.basalt`

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `eaisto.basalt`
- Field with path `identifiers.vehicle.reg_num` also fillable by `eaisto.basalt`
- Field with path `identifiers.vehicle.body` also fillable by `eaisto.basalt`
- Field with path `identifiers.vehicle.chassis` also fillable by `eaisto.basalt`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `eaisto.basalt`
- Field with path `identifiers_masked.vehicle.reg_num` also fillable by `eaisto.basalt`
- Field with path `identifiers_masked.vehicle.body` also fillable by `eaisto.basalt`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].date.to` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].date.from` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].doc.type` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].doc.number` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].reg_num` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.items[].actuality.date` also fillable by `eaisto.basalt`
- Field with path `diagnostic_cards.date.update` also fillable by `eaisto.basalt`
- Field with path `mileages.items[].date.event` also fillable by `eaisto.basalt`
- Field with path `mileages.items[].mileage` also fillable by `eaisto.basalt`
- Field with path `mileages.items[].actuality.date` also fillable by `eaisto.basalt`
- Extend enum with `eaisto.basalt` value for field `mileages.items[].filled_by.source` in `./reports/default/json-schema.json`

## v3.113.0

### Added

- Source `fines.registry`
- Field with path `fines.items[].vendor.type`
- Field with path `fines.items[].payer.name`
- Field with path `fines.items[].payer.identifier.type`
- Field with path `fines.items[].payer.identifier.number`
- Field with path `fines.items[].fssp.enforcement_proceeding.number`
- Field with path `fines.items[].fssp.enforcement_proceeding.contact`

### Changed

- Field with path `fines.items[].uin` also fillable by `fines.registry`
- Field with path `fines.items[].description` also fillable by `fines.registry`
- Field with path `fines.items[].date.event` also fillable by `fines.registry`
- Field with path `fines.items[].vendor.name` also fillable by `fines.registry`
- Field with path `fines.items[].amount.total` also fillable by `fines.registry`
- Field with path `fines.items[].article.code` also fillable by `fines.registry`
- Field with path `fines.items[].article.description` also fillable by `fines.registry`
- Field with path `fines.items[].discount.percent` also fillable by `fines.registry`
- Field with path `fines.items[].discount.date.end` also fillable by `fines.registry`
- Field with path `fines.items[].is_paid` also fillable by `fines.registry`
- Field with path `fines.items[].need_payment` also fillable by `fines.registry`
- Field with path `fines.items[].wire.user.name` also fillable by `fines.registry`
- Field with path `fines.items[].wire.user.tin` also fillable by `fines.registry`
- Field with path `fines.items[].wire.user.kpp` also fillable by `fines.registry`
- Field with path `fines.items[].wire.bank.name` also fillable by `fines.registry`
- Field with path `fines.items[].wire.bank.bik` also fillable by `fines.registry`
- Field with path `fines.items[].wire.bank.account.number` also fillable by `fines.registry`
- Field with path `fines.items[].wire.payment.purpose` also fillable by `fines.registry`
- Field with path `fines.items[].wire.kbk` also fillable by `fines.registry`
- Field with path `fines.items[].wire.okato` also fillable by `fines.registry`
- Field with path `fines.has_fines` also fillable by `fines.registry`
- Field with path `fines.items[].location.raw` also fillable by `fines.registry`
- Field with path `fines.items[].fssp.date` also fillable by `fines.registry`
- Field with path `fines.items[].fssp.is_proceed` also fillable by `fines.registry`
- Field with path `fines.date.update` also fillable by `fines.registry`

## v3.112.0

### Changed

- Description for a field with path `accidents.insurance.date.update` in `./fields/default/fields_list.json`
- Description for a field with path `accidents.insurance.items[].date.event` in `./fields/default/fields_list.json`
- Description for a field with path `accidents.insurance.items[].insurer.name` in `./fields/default/fields_list.json`
- Description for a field with path `accidents.insurance.items[].policy.series` in `./fields/default/fields_list.json`
- Description for a field with path `accidents.insurance.items[].policy.number` in `./fields/default/fields_list.json`
- Description for a field with path `accidents.insurance.items[].actuality.date` in `./fields/default/fields_list.json`

## v3.111.0

### Added

- Source `insurance.dtp.basalt`

### Changed

- Field with path `accidents.insurance.date.update` also fillable by `insurance.dtp.basalt`
- Field with path `accidents.insurance.items[].date.event` also fillable by `insurance.dtp.basalt`
- Field with path `accidents.insurance.items[].insurer.name` also fillable by `insurance.dtp.basalt`
- Field with path `accidents.insurance.items[].policy.series` also fillable by `insurance.dtp.basalt`
- Field with path `accidents.insurance.items[].policy.number` also fillable by `insurance.dtp.basalt`
- Field with path `accidents.insurance.items[].actuality.date` also fillable by `insurance.dtp.basalt`

## v3.110.0

### Changed

- Updated vehicles marks and models specs

## v3.109.0

### Added

- Field with path `restrictions.registration_actions.items[].restrict.executive_procedure`

## v3.108.0

### Changed

- Field with path `mileages.items[].mileage` also fillable by `repairs.history`
- Field with path `mileages.items[].date.event` also fillable by `repairs.history`
- Field with path `mileages.items[].actuality.date` also fillable by `repairs.history`

## v3.107.0

### Added

- Source `eaisto.registry`
- Field with path `diagnostic_cards.items[].actuality.date`
- Field with path `additional_info.vehicle.techreglament_category.code`
- Field with path `additional_info.vehicle.techreglament_category.description`

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `eaisto.registry`
- Field with path `identifiers.vehicle.body` also fillable by `eaisto.registry`
- Field with path `identifiers.vehicle.chassis` also fillable by `eaisto.registry`
- Field with path `identifiers.vehicle.reg_num` also fillable by `eaisto.registry`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `eaisto.registry`
- Field with path `identifiers_masked.vehicle.body` also fillable by `eaisto.registry`
- Field with path `identifiers_masked.vehicle.reg_num` also fillable by `eaisto.registry`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `eaisto.registry`
- Field with path `tech_data.year` also fillable by `eaisto.registry`
- Field with path `tech_data.date.update` also fillable by `eaisto.registry`
- Field with path `tech_data.brand.name.original` also fillable by `eaisto.registry`
- Field with path `tech_data.model.name.original` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.date.update` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].reg_num` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].date.to` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].doc.type` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].date.from` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].doc.serial` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].doc.number` also fillable by `eaisto.registry`
- Field with path `diagnostic_cards.items[].inspection.place` also fillable by `eaisto.registry`
- Field with path `mileages.items[].mileage` also fillable by `eaisto.registry`
- Field with path `mileages.items[].date.event` also fillable by `eaisto.registry`
- Field with path `mileages.items[].actuality.date` also fillable by `eaisto.registry`

## v3.106.0

### Added

- Source `gibdd.driver.registry`
- Field with path `driver_licenses.date.update`
- Field with path `driver_licenses.has_deprivations`
- Field with path `driver_licenses.items[].number`
- Field with path `driver_licenses.items[].status`
- Field with path `driver_licenses.items[].date.end`
- Field with path `driver_licenses.items[].date.start`
- Field with path `driver_licenses.items[].categories[]`
- Field with path `driver_licenses.items[].actuality.date`
- Field with path `driver_licenses.items[].operation.code`
- Field with path `driver_licenses.items[].operation.description`
- Field with path `driver_licenses.items[].experience.year_start`
- Field with path `driver_licenses.items[].deprivations[].date.end`
- Field with path `driver_licenses.items[].deprivations[].date.start`
- Field with path `driver_licenses.items[].deprivations[].state.code`
- Field with path `driver_licenses.items[].deprivations[].offense.place`
- Field with path `driver_licenses.items[].deprivations[].offense.decision`
- Field with path `driver_licenses.items[].deprivations[].state.description`
- Field with path `driver_licenses.items[].deprivations[].registration_place`

## v3.105.0

### Added

- Source `gibdd.wanted.registry`
- Field with path `stealings.items[].entry`
- Field with path `stealings.items[].vehicle.vin`
- Field with path `stealings.items[].vehicle.body`
- Field with path `stealings.items[].vehicle.year`
- Field with path `stealings.items[].actuality.date`
- Field with path `stealings.items[].vehicle.brand.name`

### Changed

- Field with path `stealings.is_wanted` also fillable by `gibdd.wanted.registry`
- Field with path `stealings.date.update` also fillable by `gibdd.wanted.registry`
- Field with path `stealings.items[].geo.region` also fillable by `gibdd.wanted.registry`
- Field with path `stealings.items[].date.stealing` also fillable by `gibdd.wanted.registry`

## v3.104.0

### Changed

- Field with path `identifiers.vehicle.reg_num` not fillable by `gibdd.eaisto` anymore
- Field with path `identifiers_masked.vehicle.reg_num` not fillable by `gibdd.eaisto` anymore

## v3.103.0

### Changed

- Updated vehicles marks and models specs

## v3.102.0

### Added

- Source `vehicle.price`
- Field with path `market_prices.appraisal.amount.max`
- Field with path `market_prices.appraisal.amount.min`
- Field with path `market_prices.appraisal.amount.optimal`
- Field with path `market_prices.appraisal.reasons.used_in_taxi`
- Field with path `market_prices.appraisal.reasons.accidents.count`
- Field with path `market_prices.appraisal.reasons.ownerships.count`
- Field with path `market_prices.appraisal.date.update`

## v3.101.0

### Changed

- Source `references.transdekra` marked as disabled

## v3.100.0

### Added

- Source `gibdd.stat.registry`
- Field with path `accidents.statistics.date.update`
- Field with path `accidents.statistics.items[].number`
- Field with path `accidents.statistics.items[].date`
- Field with path `accidents.statistics.items[].type`
- Field with path `accidents.statistics.items[].car_in_accident`
- Field with path `accidents.statistics.items[].causers[].identifier`
- Field with path `accidents.statistics.items[].people_in_accident`
- Field with path `accidents.statistics.items[].geo`
- Field with path `accidents.statistics.items[].participants.vehicles[].vin`
- Field with path `accidents.statistics.items[].participants.vehicles[].body`
- Field with path `accidents.statistics.items[].participants.vehicles[].chassis`
- Field with path `accidents.statistics.items[].participants.vehicles[].brand.name`
- Field with path `accidents.statistics.items[].participants.vehicles[].model.name`
- Field with path `accidents.statistics.items[].participants.vehicles[].year`
- Field with path `accidents.statistics.items[].participants.vehicles[].category`
- Field with path `accidents.statistics.items[].participants.vehicles[].color`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.gender`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.offense.main`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.offense.addition`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.drive_experience`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.damage`
- Field with path `accidents.statistics.items[].participants.vehicles[].driver.used_seat_belt`
- Field with path `accidents.statistics.items[].participants.vehicles[].passengers[].gender`
- Field with path `accidents.statistics.items[].participants.vehicles[].passengers[].damage`
- Field with path `accidents.statistics.items[].participants.vehicles[].passengers[].used_seat_belt`
- Field with path `accidents.statistics.items[].participants.pedestrians[].gender`
- Field with path `accidents.statistics.items[].participants.pedestrians[].offense.main`
- Field with path `accidents.statistics.items[].participants.pedestrians[].offense.addition`
- Field with path `accidents.statistics.items[].participants.pedestrians[].damage`

## v3.99.0

### Changed

- Field with path `insurance.osago.items[].owner.tin` also fillable by `osago.registry`
- Field with path `insurance.osago.items[].number` also fillable by `osago.registry`

## v3.98.0

### Changed

- Sources `ramiosago.base.ext`, `ramiosago.base`, `rsaosago.base.ext`, `gibdd.diagnostic.cards` marked as disabled

## v3.97.0

### Added

- Source `osago.registry`
- Field with path `insurance.osago.items[].actuality_date`
- Field with path `insurance.osago.items[].vehicle.model.category`

## v3.96.0

### Changed

- Field with path `tech_data.model.name.original` not fillable by `base.registry` and `base.registry.retry` anymore

## v3.95.0

### Changed

- Updated vehicles marks and models specs

## v3.94.1

### Fixed

- Value `МИНИВЭН` in enum `service_history.items[].vehicle.body.type`

## v3.94.0

### Added

- Source `base.registry`
- Source `base.registry.retry`
- Field with path `identifiers.vehicle.vin` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers.vehicle.body` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers.vehicle.reg_num` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers.vehicle.chassis` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers_masked.vehicle.body` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `base.registry`, `base.registry.retry`
- Field with path `identifiers_masked.vehicle.reg_num` also fillable by `base.registry`, `base.registry.retry`
- Field with path `tech_data.weight.max` also fillable by `base.registry`, `base.registry.retry`
- Field with path `tech_data.engine.power.hp` also fillable by `base.registry`, `base.registry.retry`
- Field with path `tech_data.engine.power.kw` also fillable by `base.registry`, `base.registry.retry`
- Field with path `tech_data.brand.name.original` also fillable by `base.registry`, `base.registry.retry`
- Field with path `tech_data.model.name.original` also fillable by `base.registry`, `base.registry.retry`
- Field with path `additional_info.vehicle.category.code` also fillable by `base.registry`, `base.registry.retry`
- Field with path `additional_info.vehicle.category.description` also fillable by `base.registry`, `base.registry.retry`

## v3.93.0

### Added

- Field with path `accidents.history[].other_participants[].geo`
- Field with path `accidents.history[].other_participants[].type`
- Field with path `accidents.history[].other_participants[].state`
- Field with path `accidents.history[].other_participants[].number`
- Field with path `accidents.history[].other_participants[].vehicle.year`
- Field with path `accidents.history[].other_participants[].damage.codes`
- Field with path `accidents.history[].other_participants[].accident.date`
- Field with path `accidents.history[].other_participants[].damage.points`
- Field with path `accidents.history[].other_participants[].vehicle.model.name`
- Field with path `accidents.history[].other_participants[].vehicle.brand.name`
- Field with path `accidents.history[].other_participants[].vehicle.identifiers.vin`
- Field with path `accidents.history[].other_participants[].vehicle.identifiers.body`
- Field with path `accidents.history[].other_participants[].vehicle.identifiers.chassis`

## v3.92.0

### Added

- Source `rsaosago.base`
- Fields with path `insurance.osago.items[].date.periods[].start`
- Fields with path `insurance.osago.items[].date.periods[].end`
- Fields with path `insurance.osago.*` also fillable by `rsaosago.base`

## v3.91.0

### Added

- Field with path `accidents.insurance.date.update`

## v3.90.0

### Added

- Field with path `tech_data.type.code`
- Field with path `tech_data.wheel.position_code`
- Field with path `additional_info.vehicle.exported`

## v3.89.0

### Added

- Source `rsaosago.base.history`
- Fields with path `insurance.osago.*` also fillable by `rsaosago.base.history`

## v3.88.0

### Added

- Field with path `pledges.items[].pledge_managers[].*`

## v3.87.0

### Removed

- Source `rsaosago.base.alt`

## v3.86.0

### Added

- Field with path `fines.items[].fssp.date`
- Field with path `fines.items[].fssp.is_proceed`

## v3.85.0

### Added

- Source `rsaosago.base.alt`
- Field with path `insurance.osago.items[].date.created`

### Changed

- Field with path `insurance.osago.*` also fillable by `rsaosago.base.alt`
- Field with path `insurance.osago.items[].date.created` also fillable by `rsaosago.base.ext`

## v3.84.0

### Added

- Source `arbitration.history`
- Field with path `arbitration.items[].url`
- Field with path `arbitration.items[].type`
- Field with path `arbitration.items[].number`
- Field with path `arbitration.items[].court.name`
- Field with path `arbitration.items[].description`
- Field with path `arbitration.items[].date.registration`

## v3.83.0

### Added

- Source `insurance.dtp`
- Field with path `accidents.insurance.items[].insurer.name` fillable by `insurance.dtp`
- Field with path `accidents.insurance.items[].policy.series` fillable by `insurance.dtp`
- Field with path `accidents.insurance.items[].policy.number` fillable by `insurance.dtp`
- Field with path `accidents.insurance.items[].actuality.date` fillable by `insurance.dtp`

### Changed

- Field with path `accidents.insurance.items[].date.event` fillable by `insurance.dtp`

### Removed

- Field with path `accidents.insurance.items[].insurer.type`
- Field with path `accidents.insurance.items[].accident.description`
- Field with path `accidents.insurance.items[].damage.raw`

## v3.82.0

### Removed

- Source `base.moscow`, `base.taxi`, `base.tech`, `carfax.check`, `carprice`, `tech.ext`, `tech.base`, `ramiosago.alt`, `ramiosago.alt.ext`, `pledge.fnp`, `references.tecdoc`, `calc.osago`, `carfax.ext`

## v3.81.1

### Fixed

- Extended enum with `service.history.wilgood` value for field `mileages.items[].filled_by.source` in `./reports/default/json-schema.json`

## v3.81.0

### Added

- Source `service.history.wilgood`

### Changed

- Field with path `service_history.items[].vehicle.identifiers.vin` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].vehicle.brand.name` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].vehicle.model.name` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].vehicle.year` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].vehicle.equipment.type` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].vehicle.mileage` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].geo` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].dealer.branch.name` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].date.end` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].service.recommendations` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].service.spare_parts` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].service.content` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].dealer.name` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].type` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].service.type` also fillable by `service.history.wilgood`
- Field with path `service_history.items[].service.is_planned` also fillable by `service.history.wilgood`
- Field with path `mileages.items[].date.event` also fillable by `service.history.wilgood`
- Field with path `mileages.items[].mileage` also fillable by `service.history.wilgood`
- Field with path `mileages.items[].actuality.date` also fillable by `service.history.wilgood`

## v3.80.0

### Added

- Source `ads.price.base`
- Field with path `market_prices.ads.*` also fillable by `ads.price.base`

## v3.79.0

### Changed

- Sources `calc.osago`, `pledge.fnp`, `tech.ext` marked as disabled

## v3.78.0

### Changed

- Extend enum with `UNKNOWN` value for fields `insurance.osago.items[].insurant.type`, `insurance.osago.items[].owner.type` in `./reports/default/json-schema.json`

## v3.77.0

### Added

- Source `service.history.filter`
- Field with path `registration_actions.items[].code`

### Changed

- Field with path `service_history.date.update` also fillable by `service.history.filter`
- Field with path `service_history.items[].type` also fillable by `service.history.filter`
- Field with path `service_history.items[].dealer.name` also fillable by `service.history.filter`
- Field with path `service_history.items[].date.end` also fillable by `service.history.filter`
- Field with path `service_history.items[].amount.value` also fillable by `service.history.filter`
- Field with path `service_history.items[].amount.currency` also fillable by `service.history.filter`
- Field with path `service_history.items[].service.type` also fillable by `service.history.filter`
- Field with path `service_history.items[].service.content` also fillable by `service.history.filter`
- Field with path `service_history.items[].service.spare_parts` also fillable by `service.history.filter`
- Field with path `service_history.items[].service.is_planned` also fillable by `service.history.filter`
- Field with path `service_history.items[].geo` also fillable by `service.history.filter`
- Field with path `service_history.items[].vehicle.brand.name` also fillable by `service.history.filter`
- Field with path `service_history.items[].vehicle.model.name` also fillable by `service.history.filter`
- Field with path `service_history.items[].vehicle.year` also fillable by `service.history.filter`
- Field with path `service_history.items[].vehicle.mileage` also fillable by `service.history.filter`
- Field with path `mileages.items[].date.event` also fillable by `service.history.filter`
- Field with path `mileages.items[].mileage` also fillable by `service.history.filter`
- Field with path `mileages.items[].actuality.date` also fillable by `service.history.filter`

## v3.76.0

### Added

- Field with path `tech_data.generations[].id`
- Field with path `tech_data.generations[].bodies[].id`
- Field with path `tech_data.generations[].bodies[].modifications[].id`

## v3.75.0

### Added

- Field with path `fines.items[].uin`
- Field with path `fines.items[].need_payment`

### Changed

- Field with path `fines.items[].location.raw` also fillable by `fines.base`

## v3.74.0

### Added

- Vehicle marks `logotype_uri` field in `./vehicle/default/marks.json`

## v3.73.0

### Added

- Field with path `insurance.osago.items[].vehicle.seats.count`
- Field with path `accidents.history.items[].damage.raw` also fillable by `gibdd.dtp`
- Field with path `accidents.history.items[].damage.raw` is not fillable by `base.moscow` source now

## v3.72.0

### Added

- Source `gibdd.diagnostic.cards`

### Changed

- Field with path `identifiers.vehicle.vin` also fillable by `gibdd.diagnostic.cards`
- Field with path `identifiers.vehicle.body` also fillable by `gibdd.diagnostic.cards`
- Field with path `identifiers.vehicle.chassis` also fillable by `gibdd.diagnostic.cards`
- Field with path `identifiers_masked.vehicle.vin` also fillable by `gibdd.diagnostic.cards`
- Field with path `identifiers_masked.vehicle.body` also fillable by `gibdd.diagnostic.cards`
- Field with path `identifiers_masked.vehicle.chassis` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.items[].date.from` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.items[].date.to` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.items[].doc.number` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.items[].doc.type` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.items[].inspection.place` also fillable by `gibdd.diagnostic.cards`
- Field with path `diagnostic_cards.date.update` also fillable by `gibdd.diagnostic.cards`
- Field with path `tech_data.brand.name.original` also fillable by `gibdd.diagnostic.cards`
- Field with path `tech_data.model.name.original` also fillable by `gibdd.diagnostic.cards`
- Field with path `tech_data.date.update` also fillable by `gibdd.diagnostic.cards`
- Field with path `mileages.items[].date.event` also fillable by `gibdd.diagnostic.cards`
- Field with path `mileages.items[].mileage` also fillable by `gibdd.diagnostic.cards`
- Field with path `mileages.items[].filled_by.source` also fillable by `gibdd.diagnostic.cards`
- Field with path `mileages.items[].actuality.date` also fillable by `gibdd.diagnostic.cards`

## v3.71.0

### Added

- Field with path `identifiers.manufacture.vin`

## v3.70.0

### Added

- Field with path `identifiers_masked.vehicle.vin`
- Field with path `identifiers_masked.vehicle.reg_num`
- Field with path `identifiers_masked.vehicle.sts`
- Field with path `identifiers_masked.vehicle.pts`
- Field with path `identifiers_masked.vehicle.body`
- Field with path `identifiers_masked.vehicle.chassis`
- Definition `vin_code_masked` in `./reports/default/json-schema.json`
- Definition `grz_code_masked` in `./reports/default/json-schema.json`
- Definition `sts_code_masked` in `./reports/default/json-schema.json`
- Definition `pts_code_masked` in `./reports/default/json-schema.json`
- Definition `body_code_masked` in `./reports/default/json-schema.json`
- Definition `chassis_code_masked` in `./reports/default/json-schema.json`

## v3.69.0

### Changed

- Updated vehicles marks and models specs

## v3.68.0

### Added

- Source `rsaosago.base.ext`

### Changed

- Field with path `insurance.osago.items[].insurer.name` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].date.start` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].date.end` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].restrictions.type` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].restrictions.drivers` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].policy.series` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].policy.number` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].policy.is_active` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].policy.expired` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].policy.status` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.is_active` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.using_type.status` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.using_type.description` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.amount.value` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.amount.currency` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.kbm` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.is_follow_to_registration` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].contract.has_trailer` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.model.name` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.identifiers.reg_num` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.identifiers.vin` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.identifiers.body` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.engine.power.hp` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].vehicle.weight.max` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].insurant.type` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].insurant.dob` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].insurant.name` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].insurant.tin` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].owner.type` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].owner.dob` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].owner.name` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].owner.tin` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.items[].geo` also fillable by `rsaosago.base.ext`
- Field with path `insurance.osago.date.update` also fillable by `rsaosago.base.ext`

## v3.67.0

### Added

- Field with path `pledges.date.update`

## v3.66.0

### Added

- Source `fssp.base`
- Field with path `additional_info.vehicle.owner.enforcement_proceedings.has_proceedings`

## v3.65.0

### Added

- Field with path `ads.history.date.update`
- Field with path `commercial_use.date.update`
- Field with path `customs.history.date.update`
- Field with path `diagnostic_cards.date.update`
- Field with path `fines.date.update`
- Field with path `gots_auctions.date.update`
- Field with path `images.photos.date.update`
- Field with path `insurance.osago.date.update`
- Field with path `leasings.date.update`
- Field with path `market_prices.ads.date.update`
- Field with path `ownership.history.date.update`
- Field with path `pledges_nbki.date.update`
- Field with path `recall_campaigns.date.update`
- Field with path `registration_actions.date.update`
- Field with path `repairs.history.date.update`
- Field with path `service_history.date.update`
- Field with path `stealings.date.update`
- Field with path `tech_data.date.update`
- Field with path `utilizations.date.update`
- Extend enum with `E` value for definition `additional_info.vehicle.category.code` in `./reports/default/json-schema.json`

## v3.64.0

### Added

- Field with path `tech_data.type.type_id`
- Field with path `tech_data.drive.type_id`
- Field with path `tech_data.wheel.position_id`
- Field with path `tech_data.engine.fuel.type_id`
- Field with path `tech_data.transmission.type_id`

## v3.63.0

### Added

- Field with path `market_prices.ads.items[].related_ads[].vehicle.body.type_id`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.drive.type_id`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.wheel.position_id`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.engine.fuel.type_id`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.transmission.type_id`

### Changed

- Extend enum with `Газовый`, `Гибридный` and `Электрический` values for definition `engine_fuel_type` in `./reports/default/json-schema.json`

## v3.62.0

### Added

- References `./vehicles/default/body_types.json`
- References `./vehicles/default/engine_types.json`
- References `./vehicles/default/transmission_types.json`
- References `./vehicles/default/driving_wheels_types.json`
- References `./vehicles/default/steering_wheel_types.json`

## v3.61.0

### Added

- Field with path `ads.history.items[].uri` in `./reports/default/json-schema.json`

## v3.60.1

### Fixed

- Data type for field with path `market_prices.ads.items[].metadata.functions[].name` in `./reports/default/json-schema.json`
- Data type for field with path `market_prices.ads.items[].metadata.functions[].description` in `./reports/default/json-schema.json`
- Data type for field with path `market_prices.ads.items[].metadata.functions[].parts[].type` in `./reports/default/json-schema.json`
- Data type for field with path `market_prices.ads.items[].metadata.functions[].parts[].description` in `./reports/default/json-schema.json`
- Data type for field with path `market_prices.ads.items[].metadata.functions[].parts[].coefficients` in `./reports/default/json-schema.json`

## v3.60.0

### Added

- Field with path `market_prices.ads.items[].mileage`
- Field with path `market_prices.ads.items[].related_ads[].date.publish`
- Field with path `market_prices.ads.items[].metadata.functions[].name`
- Field with path `market_prices.ads.items[].metadata.functions[].description`
- Field with path `market_prices.ads.items[].metadata.functions[].parts[].type`
- Field with path `market_prices.ads.items[].metadata.functions[].parts[].description`
- Field with path `market_prices.ads.items[].metadata.functions[].parts[].coefficients`
- Field with path `market_prices.ads.items[].metadata.functions[].parts[].bounds.left`
- Field with path `market_prices.ads.items[].metadata.functions[].parts[].bounds.right`

## v3.59.0

### Added

- Source `gots.history`
- Field with path `gots_auctions.items[].vehicle.mileage`
- Field with path `gots_auctions.items[].vehicle.damage.value`
- Field with path `gots_auctions.items[].vehicle.damage.descriptions[].code`
- Field with path `gots_auctions.items[].vehicle.damage.descriptions[].value`
- Field with path `gots_auctions.items[].auction.date`
- Field with path `gots_auctions.items[].auction.number`
- Field with path `gots_auctions.items[].auction.client.name`
- Field with path `gots_auctions.items[].auction.client.postal_code`
- Field with path `gots_auctions.items[].auction.client.city`
- Field with path `gots_auctions.items[].auction.client.address_line`
- Field with path `gots_auctions.items[].auction.client.phone_number`

## v3.58.0

### Added

- Field with path `insurance.osago.items[].restrictions.drivers`

## v3.57.0

### Changed

- Sources `ramiosago.alt`, `ramiosago.alt.ext` marked as disabled

## v3.56.0

### Changed

- Sources `base.tech`, `carfax.check` marked as disabled

## v3.55.0

### Added

- Source `references.oats`
- Field with path `additional_info.catalog.oats.items[].code`
- Field with path `additional_info.catalog.oats.items[].vehicle.brand.name`
- Field with path `additional_info.catalog.oats.items[].vehicle.model.name`
- Field with path `additional_info.catalog.oats.items[].vehicle.modification.name`
- Field with path `additional_info.catalog.oats.items[].vehicle.engine.model.name`
- Field with path `additional_info.catalog.oats.items[].vehicle.engine.type`
- Field with path `additional_info.catalog.oats.items[].vehicle.engine.power.hp`
- Field with path `additional_info.catalog.oats.items[].vehicle.engine.power.kw`
- Field with path `additional_info.catalog.oats.items[].vehicle.engine.volume`
- Field with path `additional_info.catalog.oats.items[].vehicle.category.name`
- Field with path `additional_info.catalog.oats.items[].vehicle.manufactured.year.start`
- Field with path `additional_info.catalog.oats.items[].vehicle.manufactured.year.end`

## v3.54.0

### Added

- Source `fines.base.ext`

### Changed

- Field with path `fines.items[].date.event` also fillable by `fines.base.ext`
- Field with path `fines.items[].article.code` also fillable by `fines.base.ext`
- Field with path `fines.items[].article.description` also fillable by `fines.base.ext`
- Field with path `fines.items[].description` also fillable by `fines.base.ext`
- Field with path `fines.items[].vendor.name` also fillable by `fines.base.ext`
- Field with path `fines.items[].amount.value` also fillable by `fines.base.ext`
- Field with path `fines.items[].amount.total` also fillable by `fines.base.ext`
- Field with path `fines.items[].discount.percent` also fillable by `fines.base.ext`
- Field with path `fines.items[].discount.date.end` also fillable by `fines.base.ext`
- Field with path `fines.items[].is_paid` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.user.name` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.user.tin` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.user.kpp` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.bank.account.number` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.bank.name` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.bank.bik` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.payment.purpose` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.kbk` also fillable by `fines.base.ext`
- Field with path `fines.items[].wire.okato` also fillable by `fines.base.ext`
- Field with path `fines.has_fines` also fillable by `fines.base.ext`
- Field with path `fines.items[].location.raw` also fillable by `fines.base.ext`
- Field with path `fines.items[].photos[].type` also fillable by `fines.base.ext`
- Field with path `fines.items[].photos[].uri` also fillable by `fines.base.ext`

## v3.53.0

### Added

- Field with path `market_prices.ads.items[].related_ads[].geo`
- Field with path `market_prices.ads.items[].related_ads[].uri`
- Field with path `market_prices.ads.items[].related_ads[].price.amount`
- Field with path `market_prices.ads.items[].related_ads[].price.currency`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.brand.name`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.model.name`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.year`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.condition`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.wheel.position`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.transmission.type`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.drive.type`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.owners.count`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.engine.power.hp`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.engine.volume`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.engine.fuel.type`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.body.type`
- Field with path `market_prices.ads.items[].related_ads[].vehicle.mileage`

## v3.52.0

### Changed

- Field with path `mileages.items[].date.event` also fillable by `service.history.fitservice` source
- Field with path `mileages.items[].mileage` also fillable by `service.history.fitservice` source
- Field with path `mileages.items[].actuality.date` also fillable by `service.history.fitservice` source
- Extend enum with `service.history.fitservice` value for field `mileages.items[].filled_by.source` in `./reports/default/json-schema.json`

## v3.51.0

### Added

- Field with path `insurance.osago.items[].policy.status`
- Field with path `insurance.osago.items[].policy.expired`
- Field with path `insurance.osago.items[].contract.is_active`
- Field with path `insurance.osago.items[].contract.using_type.status`
- Field with path `insurance.osago.items[].contract.using_type.description`
- Field with path `insurance.osago.items[].contract.amount.value`
- Field with path `insurance.osago.items[].contract.amount.currency`
- Field with path `insurance.osago.items[].contract.kbm`
- Field with path `insurance.osago.items[].contract.is_follow_to_registration"`
- Field with path `insurance.osago.items[].contract.has_trailer`
- Field with path `insurance.osago.items[].vehicle.model.name`
- Field with path `insurance.osago.items[].vehicle.identifiers.reg_num`
- Field with path `insurance.osago.items[].vehicle.identifiers.vin`
- Field with path `insurance.osago.items[].vehicle.identifiers.body`
- Field with path `insurance.osago.items[].vehicle.engine.power.hp`
- Field with path `insurance.osago.items[].vehicle.weight.max`
- Field with path `insurance.osago.items[].insurant.type`
- Field with path `insurance.osago.items[].insurant.dob`
- Field with path `insurance.osago.items[].insurant.name`
- Field with path `insurance.osago.items[].insurant.tin`
- Field with path `insurance.osago.items[].owner.type`
- Field with path `insurance.osago.items[].owner.dob`
- Field with path `insurance.osago.items[].owner.name`
- Field with path `insurance.osago.items[].owner.tin`
- Field with path `insurance.osago.items[].geo`

## v3.50.0

### Added

- Source `service.history.fitservice`

### Changed

- Field with path `service_history.items[].dealer.name` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].dealer.branch.name` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].date.end` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].amount.value` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].service.content` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].service.spare_parts` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].service.recommendations` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].geo` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].vehicle.brand.name` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].vehicle.model.name` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].vehicle.year` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].vehicle.mileage` also fillable by `service.history.fitservice`
- Field with path `service_history.items[].vehicle.identifiers.vin` also fillable by `service.history.fitservice`

## v3.49.0

### Added

- Source `mileages.registry`
- Field with path `mileages.items[].actuality.date`

### Changed

- Extend enum with `OSAGO CETOA` value for field `repairs.history.items[].task_process` in `./reports/default/json-schema.json`
- Field with path `mileages.items[].date.event` also fillable by `mileages.registry`
- Field with path `mileages.items[].mileage` also fillable by `mileages.registry`

## v3.48.0

### Added

- Source `references.tecdoc`
- Field with path `additional_info.catalog.tecdoc.items[].manufacturer_id`
- Field with path `additional_info.catalog.tecdoc.items[].model_id`
- Field with path `additional_info.catalog.tecdoc.items[].id`
- Field with path `additional_info.catalog.tecdoc.items[].name`
- Field with path `additional_info.catalog.tecdoc.items[].description`

## v3.47.0

### Added

- Source `restrictions.registry`
- Field with path `restrictions.registration_actions.date.update`
- Field with path `restrictions.registration_actions.items[].actuality.date`
- Field with path `restrictions.registration_actions_archive.date.update`
- Field with path `restrictions.registration_actions_archive.items[].date.added`
- Field with path `restrictions.registration_actions_archive.items[].date.start`
- Field with path `restrictions.registration_actions_archive.items[].date.end`
- Field with path `restrictions.registration_actions_archive.items[].vehicle.year`
- Field with path `restrictions.registration_actions_archive.items[].vehicle.model.name`
- Field with path `restrictions.registration_actions_archive.items[].initiator.name`
- Field with path `restrictions.registration_actions_archive.items[].initiator.region.name`
- Field with path `restrictions.registration_actions_archive.items[].restrict.type`
- Field with path `restrictions.registration_actions_archive.items[].restrict.reason`
- Field with path `restrictions.registration_actions_archive.items[].restrict.number`
- Field with path `restrictions.registration_actions_archive.items[].actuality.date`
- Field with path `restrictions.registration_actions_archive.has_restrictions`

### Changed

- Extend pattern with `*` for definition `engine_number` in `./reports/default/json-schema.json`

## v3.46.0

### Added

- Tests for specifications using `nodejs` and `jest` [#154]

### Changed

- Tests now located in `__tests__` directory [#164]
- `Makefile` and `docker-compose.yml` files moved to `__tests__` directory [#154]
- Info about supported SDKs added into readme file [#154]

### Removed

- **PHP SDK** - moved to [separate repository `avtocod/specs-php`](https://github.com/avtocod/specs-php). **Important notice**: If you used PHP SDK from this repository - you must add new dependency `avtocod/specs-php:~1.0` into your dependencies list! [#154]
- Issue templates for sdk bugs and feature requests [#154]

### Fixed

- Fixed data type for field with path `ads.history.items[].photos.grz` in `fields_list.json` [#154]

[#154]:https://github.com/avtocod/specs/pull/154
[#164]:https://github.com/avtocod/specs/pull/164

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
