# Change Log
All notable changes to this project will be documented in this file.

## [2.0.1](https://github.com/nWidart/Laravel-broadway/releases/tag/2.0.1) - 2017-11-18

### Added

Support for laravel 5.5

## [2.0.0](https://github.com/nWidart/Laravel-broadway/releases/tag/2.0.0) - 2017-08-22.

This is solely a compatibility update for broadway/broadway 1.0.0.

Please read their [UPGRADE GUIDE](https://github.com/broadway/broadway/blob/master/UPGRADE.md) to see what needs updating in your codebase.

__Notice__: Broadway has split out a bunch of packages from its main repository (dbal / elasticsearch / sagas); This package has opted to require only the new dbal package. If you depend on ElasticSearch you will need to require it yourself.

```bash
composer require broadway/read-model-elasticsearch
```

## [1.0.0](https://github.com/nWidart/Laravel-broadway/releases/tag/1.0.0) - 2017-02-01

### Added

- Support for laravel 5.4

### Changed

- Updated broadway to 0.10
- Fixed DBAL connection using connection name instead of driver for pdo driver. (#17)
- Event store uuid column changed to char (#15)
- Make the stream decorator and enrichers available (#12)
- Create correct version of ElasticSearch client (#8)
- Fix error instantiating ElasticSearch client (#6)

### Removed 

- Dropped support for laravel 5.0

## [0.3.0](https://github.com/nWidart/Laravel-broadway/releases/tag/0.3.0) - 2015-02-03

### Added

- Support for laravel 5
- Default concrete class for `AggregateFactoryInterface` (bound to `PublicConstructorAggregateFactory`)

### Changed

- Registering Command Handlers : new public api for registering command handlers
- Registering Projectors : new public api for registering projectors

### Removed 

- Dropped support for laravel 4

## [0.2.1](https://github.com/nWidart/Laravel-broadway/releases/tag/0.2.1) - 2015-01-28

### Added

- Migration: Event Store table now has an id column auto incremented. 
- Migration: Event Store table now has a uniqueness constraint on the `uuid` and `playhead`

### Changed

- Composer: Adding a prefer stable option in `composer.json`
- Composer: Adding Elasticsearch package as a suggested package. Not included by default.
- Migration: Event Store table now use the correct types


## [0.2.0](https://github.com/nWidart/Laravel-broadway/releases/tag/0.2) - 2015-01-20

### Added

- New command: `php artisan broadway:event-store:migrate table_name` to create the event store table
- Read Model: A factory is now instantiating the read model implementation based on the setting
- Read Model: An In Memory read model driver is now available
- Event Store: A factory is now instantiating the event store implementation based on the setting
- Event Store: An In Memory event store driver is now available

### Changed

- IoC key name of the Elasticsearch client from `elastic-search` to `Elasticsearch`
- Config: Change the read-model key name of `elastic-search` to `elasticsearch`


## [0.1.0](https://github.com/nWidart/Laravel-broadway/releases/tag/0.1) - 2015-01-19

First tagged version

