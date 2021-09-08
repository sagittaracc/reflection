<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use sagittaracc\classes\Test;
use sagittaracc\ReflectionClass;

class ReflectionClassTest extends TestCase
{

    public function testReflectionClass(): void
    {
        $reflection = new ReflectionClass(Test::class);
        $method = $reflection->getMethod('method');

        $this->assertEquals("if (true) { echo 'this is method'; }  echo 'never goes here';", $method->body);
    }
}
