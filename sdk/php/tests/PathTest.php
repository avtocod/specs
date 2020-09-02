<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Legacy\Tests;

use PHPUnit\Framework\TestCase;
use Avtocod\Specifications\Legacy\Path;

class PathTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetRoot(): void
    {
        self::assertEquals(\dirname(__DIR__, 3), Path::getRoot());
    }
}
