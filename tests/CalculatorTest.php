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
}
