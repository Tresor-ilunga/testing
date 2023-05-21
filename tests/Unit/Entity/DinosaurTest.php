<?php

namespace Unit\Entity;

use Monolog\Test\TestCase;

class DinosaurTest extends TestCase
{
    public function testItWorks(): void
    {
        self::assertEquals('42', 42);
    }
    public function testItWorksTheSame(): void
    {
        self::assertSame('42', 42);
    }

}