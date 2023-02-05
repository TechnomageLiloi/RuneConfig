<?php

namespace Liloi\Config;

use PHPUnit\Framework\TestCase;

/**
 * Test for {@link \Liloi\Pensieve\Sparkle}.
 *
 * @package Liloi\Pensieve
 */
class PoolTest extends TestCase
{
    /**
     * Check construct method.
     */
    public function test(): void
    {
        $singleton = Pool::getSingleton();
        $singleton->set(new Sparkle('test', function (){return '1';}));
        $this->assertEquals(1, $singleton->get('test'));
    }
}