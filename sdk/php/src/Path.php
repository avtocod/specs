<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Legacy;

/**
 * @deprecated This class used only for migration to separated sdk package and will be removed in next major release
 */
final class Path {

    public static function getRoot(): string
    {
        return \dirname(__DIR__, 3);
    }
}
