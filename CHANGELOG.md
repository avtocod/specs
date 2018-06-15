# Changelog

## v2.0.0

### Added

- Field with name `diagnostic_cards.inspection.place`
- Field with name `restrictions.registration_actions.has_restrictions`
- Field with name `taxi.used_in_taxi`
- Field with name `utilizations.was_utilized`
- Field with name `stealings.is_wanted`
- Field with name `customs.history.specification.raw`

### Changed

- Fields paths now follows next rule - if **path** element contains some iterable data inside, path element ends with `[]`. Fields **names** not changed
- Fields types `number` changed to `numeric`
- Some fields types fixed
