<p align="center">
  <img alt="avtocod" src="https://avatars1.githubusercontent.com/u/32733112?s=70&v=4" width="70" height="70" />
</p>

## Спецификации и документация по проекту `avtocod`

[![Version][badge_version]][link_packagist]
[![Build Status][badge_build_status]][link_build_status]
[![Issues][badge_issues]][link_issues]
[![License][badge_license]][link_license]
[![Downloads count][badge_downloads_count]][link_packagist]

#### Глоссарий

* **Филд данных** (`field`) - единица информации;
* **Отчет** (`report`) - единица товара;

#### Структурные взаимосвязи

* **Отчет** - состоит из набора **филдов данных**.

### Филды данных

Филды данных обладают следующими свойствами:

* Филд имеет уникальное имя, используемое используемое как внутри системы, так и транслируемое наружу посредством отчета;
* Имена филдов являются фиксированными;
* Имя филда данных должно состоять из букв латинского алфавита в нижнем регистре;
* При необходимости разделить имя филда данных на составные слова используется символ "подчеркивания" (`_`);
* Для группировки различных филдов используется нотация с помощью точки (`.`)  (`dot notation`);
* Глубина "вложенности" нотаций может быть произвольной.

> Пример нотации с помощью точки:
>
> Имеется набор филдов: `name`, `year`, `vin`, `owner_name`. Все они относятся к базовым характеристикам транспортного средства, кроме `owner_name`, который относится к данным владельца. В этом случае их следует называть, например: `base.name`, `base.year`, `base.vin`, `owner.owner_name`.

## SDK

Данный репозиторий содержит SDK для удобного доступа к данным спецификаций.

#### PHP SDK

Для установки выполните в терминале следующую команду:

```shell
$ composer require avtocod/specs "^1.2"
```

> Для этого необходим установленный `composer`. Для его установки перейдите по [данной ссылке][getcomposer].

> Обратите внимание на то, что необходимо фиксировать мажорную версию устанавливаемого пакета.

После этого вы сможете получать, например, спецификации по филдам в вашем php-приложении следующим образом:

```php
<?php

$fields_specifications = \Avtocod\Specifications\Specifications::getFieldsSpecification();
```

## Поддержка и развитие

Если у вас возникли какие-либо проблемы по работе с данным пакетом, пожалуйста, создайте соответствующий `issue` в данном репозитории.

Если вы способны самостоятельно реализовать тот функционал, что вам необходим - создайте PR с соответствующими изменениями. Крайне желательно сопровождать PR соответствующими тестами, фиксирующими работу ваших изменений. После проверки и принятия изменений будет опубликована новая минорная версия.

## Лицензирование

Код данного репозитория распространяется под лицензией [MIT][link_license].

[badge_version]:https://img.shields.io/packagist/v/avtocod/specs.svg?style=flat&maxAge=5
[badge_license]:https://img.shields.io/packagist/l/avtocod/specs.svg
[badge_build_status]:https://scrutinizer-ci.com/g/avtocod/specs/badges/build.png?b=master
[badge_downloads_count]:https://img.shields.io/packagist/dt/avtocod/specs.svg?style=flat&maxAge=30
[badge_issues]:https://img.shields.io/github/issues/avtocod/specs.svg?style=flat&maxAge=30
[link_packagist]:https://packagist.org/packages/avtocod/specs
[link_license]:https://github.com/avtocod/specs/blob/master/LICENSE
[link_build_status]:https://scrutinizer-ci.com/g/avtocod/specs/build-status/master
[link_issues]:https://github.com/avtocod/specs/issues
[getcomposer]:https://getcomposer.org/download/
