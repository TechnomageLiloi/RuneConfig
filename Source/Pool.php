<?php

namespace Liloi\Pensieve;

class Pool
{
    private static array $link = [];

    public static function get(string $key)
    {
        $sparkle = self::$link[$key];
        $f = $sparkle->get();
        return $f();
    }

    public static function set(Sparkle $sparkle): void
    {
        self::$link[$sparkle->getKey()] = $sparkle;
    }
}