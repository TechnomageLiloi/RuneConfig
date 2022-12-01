<?php

namespace Liloi\Pensieve;

/**
 * @package Liloi\Config
 */
class Sparkle
{
    /**
     * @var callable
     */
    private $f;

    /**
     * @var string
     */
    private string $key;

    /**
     * Sparkle constructor.
     *
     * @param string|null $key Tool unique key.
     * @param callable|null $f Lazy function
     */
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

    /**
     * Get tool unique key.
     *
     * @param string $key Tool unique key.
     */
    public function getKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Set tool unique key.
     *
     * @return string Tool unique key.
     */
    public function setKey(): string
    {
        return $this->key;
    }

    /**
     * Get tool lazy function.
     *
     * @param callable $f Lazy function
     */
    public function get(callable $f): void
    {
        $this->f = $f;
    }

    /**
     * Set tool lazy function.
     *
     * @return callable Lazy function.
     */
    public function set(): callable
    {
        return $this->f;
    }
}