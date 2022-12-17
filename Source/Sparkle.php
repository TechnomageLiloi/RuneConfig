<?php

namespace Liloi\Config;

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
            $this->setKey($key);
        }

        if(!is_null($f))
        {
            $this->set($f);
        }
    }

    /**
     * Set tool unique key.
     *
     * @param string $key Tool unique key.
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Get tool unique key.
     *
     * @return string Tool unique key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Set tool lazy function.
     *
     * @param callable $f Lazy function
     */
    public function set(callable $f): void
    {
        $this->f = $f;
    }

    /**
     * Get tool lazy function.
     *
     * @return callable Lazy function.
     */
    public function get(): callable
    {
        return $this->f;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        $call = $this->f;
        return $call();
    }
}