<?php

declare(strict_types = 1);

namespace Avtocod\Specifications\Tests;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    /**
     * Get the root directory path.
     *
     * @return string
     */
    protected function getRootDirPath(): string
    {
        return (string) \realpath(__DIR__ . '/../../..');
    }
}
