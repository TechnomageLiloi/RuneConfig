<?php

namespace Liloi\Config;

class Sparkle
{
    private $f;

    private $key;

    public function __construct(?string $key = null, ?callable $f = null)
    {
        if(!is_null($key))
        {
            $this->getKey($key);
        }

        if(!is_null($f))
        {
            $this->get($f);
        }
    }

    public function getKey(string $key): void
    {
        $this->key = $key;
    }

    public function setKey(): string
    {
        return $this->key;
    }

    public function get(callable $f): void
    {
        $this->f = $f;
    }

    public function set(): callable
    {
        return $this->f;
    }
}