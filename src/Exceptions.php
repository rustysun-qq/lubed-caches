<?php
namespace Lubed\Caches;

use Lubed\Exceptions\RuntimeException;

final class Exceptions {
    const CACHE_FAILED=101601;
    const INVALID_ARGUMENT=101602;
    public static function CacheFailed(string $msg):RuntimeException
    {
        throw new RuntimeException(self::CACHE_FAILED,$msg);
    }

    public static function InvalidArgument(string $msg):RuntimeException
    {
        throw new RuntimeException(self::INVALID_ARGUMENT,$msg);
    }
}
