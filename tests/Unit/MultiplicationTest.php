<?php
namespace SlashEquip\Sumy\Tests\Unit;

use SlashEquip\Sumy\Sumy;
use SlashEquip\Sumy\Tests\TestCase;

class MultiplicationTest extends TestCase
{
    /** @test */
    public function can_multiply_a_number()
    {
        $number = new Sumy(100);

        $number->multiply(7);
        $this->assertEquals(700, $number->get());
    }

    /** @test */
    public function can_chain_multiply_a_number()
    {
        $number = new Sumy(100);

        $number->multiply(4)->multiply(2.5);
        $this->assertEquals(1000, $number->get());
    }
}