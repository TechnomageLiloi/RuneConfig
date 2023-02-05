<?php

namespace Liloi\Config;

class Pool
{
    /**
     * Configuration pool instance.
     *
     * @var self|null
     */
    static private ?self $singleton = null;

    /**
     * Configuration pool instance.
     *
     * @return static
     */
    public static function getSingleton(): self
    {
        if(is_null(self::$singleton))
        {
            self::$singleton = new self();
        }

        return self::$singleton;
    }

    /**
     * Configuration pool constructor.
     */
    private function __construct()
    {
    }

    /**
     * List of configuration sparkles.
     *
     * @var array
     */
    private array $link = [];

    /**
     * Get configuration sparkle.
     *
     * @param string $key
     */
    public function get(string $key)
    {
        $sparkle = $this->link[$key];
        $f = $sparkle->get();
        return $f();
    }

    /**
     * Set configuration sparkle.
     *
     * @param Sparkle $sparkle
     */
    public function set(Sparkle $sparkle): void
    {
        $this->link[$sparkle->getKey()] = $sparkle;
    }

    /**
     * Remove configuration sparkle.
     *
     * @param string $key
     */
    public function remove(string $key): void
    {
        unset($this->link[$key]);
    }
}