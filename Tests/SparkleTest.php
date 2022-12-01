<?php

namespace Liloi\Pensieve;

use PHPUnit\Framework\TestCase;

/**
 * Test for {@link \Liloi\Pensieve\Sparkle}.
 *
 * @package Liloi\Pensieve
 */
class SparkleTest extends TestCase
{
    /**
     * Check construct method.
     */
    public function testConstruct(): void
    {
        $key = 'test';
        $f = function () {};
        $pool = new Sparkle($key, $f);

        $this->assertEquals($key, $pool->getKey());
        $this->assertEquals($f, $pool->get());
    }

    /**
     * Check get/set methods.
     */
    public function testGetSet(): void
    {
        $key = 'test';
        $f = function () {};
        $pool = new Sparkle();
        $pool->set($f);
        $pool->setKey($key);

        $this->assertEquals($key, $pool->getKey());
        $this->assertEquals($f, $pool->get());
    }

    /**
     * Check get/set methods.
     */
    public function testExecute(): void
    {
        $key = 'test';
        $result = 'qwerty';

        $f = function () use ($result) {
            return $result;
        };
        $pool = new Sparkle();
        $pool->set($f);
        $pool->setKey($key);

        $this->assertEquals($result, $pool->execute());
    }
}