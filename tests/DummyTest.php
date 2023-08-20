<?php

declare(strict_types=1);

namespace Tests\MySite;

use MySite\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function testAddSumsCorrectly(): void
    {
        $sut = new Dummy();
        $a = 2;
        $b = 2;
        $expectedResult = 4;

        $this->assertEquals($expectedResult, $sut->add($a, $b));
    }
}
