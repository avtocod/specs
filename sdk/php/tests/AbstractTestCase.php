<?php

namespace Avtocod\Specifications\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTestCase.
 */
abstract class AbstractTestCase extends TestCase
{
    /**
     * Возвращает путь к базовой директории репозитория.
     *
     * @return bool|string
     */
    protected function getRootDirPath()
    {
        return realpath(__DIR__ . '/../../..');
    }
}
