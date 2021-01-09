<?php
namespace SlashEquip\Sumy\Tests\Unit;

use SlashEquip\Sumy\Sumy;
use SlashEquip\Sumy\Tests\TestCase;

class DivisionTest extends TestCase
{
    /** @test */
    public function can_divide_a_number()
    {
        $sumy = new Sumy(100);

        $sumy->divide(4);
        $this->assertEquals(25, $sumy->get());
    }

    /** @test */
    public function can_chain_divide_a_number()
    {
        $sumy = new Sumy(100);

        $sumy->divide(10)->divide(2);
        $this->assertEquals(5, $sumy->get());
    }
}