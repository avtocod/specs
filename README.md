<p align="center">
  <img alt="avtocod" src="https://avatars1.githubusercontent.com/u/32733112?s=70&v=4" width="70" height="70" />
</p>

## Публичные спецификации проекта "Автокод"

![Release version][badge_release_version]
![Release date][badge_release_date]
![Commits since latest release][badge_commits_since_release]

Данный репозиторий содержит публичные спецификации, связанные с проектом "Автокод".

### Поля данных отчёта (филды)

Поля данных (далее по тексту - *филдлы*) обладают следующими свойствами:

- Филд имеет уникальный путь *(`path`)*;
- Пути *(`path`)* филдов являются фиксированными;
- Имя филда данных состоит из букв латинского алфавита в нижнем регистре;
- При необходимости разделить имя филда данных на составные слова используется символ "подчеркивания" (`_`);
- Для группировки различных филдов используется нотация с помощью точки (`.`);
- Глубина "вложенности" нотаций может быть произвольной;
- Для указания того, что элемент пути филда является массивом используется обозначение `[]` (добавляется в конец группы филда).
- Для указания **типа данных**, которые может содержать филд могут использоваться следующие ключевые слова - `array`, `boolean`, `float`, `integer`, `object`, `string`, `null`;
- Каждый филд может быть `null`.

> Пример нотации с помощью точки:
>
> Имеется набор филдов: `name`, `year`, `vin`, `owner_name`. Все они относятся к базовым характеристикам ТС, кроме `owner_name`, который относится к данным владельца. В этом случае их именование будет иметь следующий вид: `base.name`, `base.year`, `base.vin`, `owner.owner_name`.

> Пример использования указателя массива:
>
> Отчёт содержит набор данных о датах и местах прохождения технического осмотра ТС. Филды этих данных имеют вид `diagnostic_card.items[].date` и `diagnostic_card.items[].place` соответственно. Это означает, что `diagnostic_card.items[]` - это массив, элементами которого являются объекты, имеющие ключи `date` и `place`.

**Описание всех филдов** вы можете найти [в данном файле](./fields/default/fields_list.json), **[json-schema][json-schema] отчёта** располагается в [этом файле](./reports/default/json-schema.json).

Примеры отчётов: [с данными](./reports/default/examples/full.json), [без данных](./reports/default/examples/empty.json).

### Типы идентификаторов

Для создания отчёта необходимо передать тип и значение идентификатора (VIN-код, номер СТС и т.п.).

Поддерживаемые типы идентификаторов и их описания перечислены в [данном файле](./identifiers/default/types_list.json).

### Имена источников

Для формирования данных отчёта происходят обращения к различным источникам. Каждый источник обладает следующими свойствами:

- Имя источника состоит из букв латинского алфавита в нижнем регистре;
- Для группировки различных источников используется нотация с помощью точки (`.`);
- Каждый источник наполняет данными фиксированный набор филдов;
- Если несколько источников наполняют данными одни и те же филды - в отчёт попадают данные от того источника, который нами считается наиболее доверительным.

Со всеми поддерживаемыми нами источниками вы можете ознакомиться в [данном файле](./sources/default/sources_list.json).

### Идентификаторы марок и моделей транспортных средств

Отчет _может_ содержать данные о марках и моделях транспортных средств, включая их уникальные идентификаторы, состоящие из символов `A-Z`, цифр и символа `_`.

Со всеми поддерживаемыми нами идентификаторами вы можете ознакомиться в файлах [марок](./vehicles/default/marks.json) и [моделей](./vehicles/default/).

> Модели поделены по категориям типа ТС. Пример: [models_bus.json](./vehicles/default/models_bus.json) - автобусы.

С идентификаторами типов моделей вы можете ознакомится в [файле спецификации](vehicles/default/types.json).

## Обновления и версионирование

Данные, содержащиеся в данном репозитории обновляются с течением времени. Измененные состояния фиксируются с помощью [тэгирования][git_tagging] с присвоением соответствующего значения версии. Значения версий присваиваются в соответствии с правилами [семантического версионирования][semver].

На данный момент существуют 3 мажорные версии:

- `v1` - устаревшая *(не поддерживается с 22 июня 2018 года)*;
- `v2` - устаревшая *(не поддерживается с 19 февраля 2019 года)*;
- `v3` - актуальная.

Для того, что бы получать уведомления об изменениях - **подпишитесь** на них, перейдя по **[этой ссылке][watch_repo]**.

## SDK

Данный репозиторий содержит SDK для удобного доступа к данным спецификаций.

#### PHP SDK

[![Version][badge_packagist_version]][link_packagist]
[![PHP Version][badge_php_version]][link_packagist]
[![Build Status][badge_build_status]][link_build_status]
[![Downloads count][badge_packagist_dl_count]][link_packagist]

Для установки выполните в терминале следующую команду:

```bash
$ composer require avtocod/specs "^3.0"
```

> Для этого необходим установленный `composer`. Для его установки перейдите по [данной ссылке][getcomposer].

> Обратите внимание на то, что необходимо фиксировать мажорную версию устанавливаемого пакета.

После этого вы сможете получать, например, спецификации по филдам в вашем php-приложении следующим образом:

```php
<?php

$fields_specifications = \Avtocod\Specifications\Specifications::getFieldsSpecification();
```

Для получения информации об остальных возможностях - смотрите исходный код.

## Поддержка

Если у вас возникли какие-либо проблемы при работе с данным репозиторием, пожалуйста, создайте соответствующий `issue` [перейдя по данной ссылке][link_create_issue].

[badge_release_version]:https://img.shields.io/github/release/avtocod/specs.svg?style=for-the-badge&maxAge=5
[badge_release_date]:https://img.shields.io/github/release-date/avtocod/specs.svg?style=for-the-badge&maxAge=5
[badge_commits_since_release]:https://img.shields.io/github/commits-since/avtocod/specs/latest.svg?style=for-the-badge&maxAge=5
[badge_packagist_version]:https://img.shields.io/packagist/v/avtocod/specs.svg?maxAge=5
[badge_php_version]:https://img.shields.io/packagist/php-v/avtocod/specs.svg?maxAge=5
[badge_build_status]:https://img.shields.io/github/workflow/status/avtocod/specs/tests/master
[badge_packagist_dl_count]:https://img.shields.io/packagist/dt/avtocod/specs.svg?maxAge=30
[badge_issues]:https://img.shields.io/github/issues/avtocod/specs.svg?style=for-the-badge&maxAge=30
[link_packagist]:https://packagist.org/packages/avtocod/specs
[link_build_status]:https://github.com/avtocod/specs/actions
[link_issues]:https://github.com/avtocod/specs/issues
[link_create_issue]:https://github.com/avtocod/specs/issues/new/choose
[getcomposer]:https://getcomposer.org/download/
[git_tagging]:https://git-scm.com/book/en/v2/Git-Basics-Tagging
[json-schema]:https://json-schema.org
[watch_repo]:https://github.com/avtocod/specs/subscription
[semver]:https://semver.org/lang/ru/
