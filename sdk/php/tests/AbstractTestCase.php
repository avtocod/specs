<?php

namespace Avtocod\Specifications\Tests;

use PHPUnit\Framework\TestCase;

abstract class AbstractTestCase extends TestCase
{
    /**
     * Get the root directory path.
     *
     * @return bool|string
     */
    protected function getRootDirPath()
    {
        return \realpath(__DIR__ . '/../../..');
    }
}
