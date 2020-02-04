<?php

namespace Tests\Darmats\GitHubActions;

use Darmats\GitHubActions\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @var Calculator */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        self::assertSame(3, $this->calculator->add(1, 2));
    }

    public function testSub(): void
    {
        self::assertSame(2, $this->calculator->sub(3, 1));
        self::assertSame(1, $this->calculator->sub(3, 2));
    }
}
