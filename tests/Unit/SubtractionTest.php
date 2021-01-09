<?php
namespace SlashEquip\Sumy\Tests\Unit;

use SlashEquip\Sumy\Sumy;
use SlashEquip\Sumy\Tests\TestCase;

class SubtractionTest extends TestCase
{
    /** @test */
    public function can_subtract_a_number()
    {
        $sumy = new Sumy(456.9105);

        $sumy->subtract(346.9105);
        $this->assertEquals(110, $sumy->get());
    }

    /** @test */
    public function can_chain_subtract_a_number()
    {
        $sumy = new Sumy(456.9105);

        $sumy->subtract(346.9105)->subtract(3.7);
        $this->assertEquals(106.3, $sumy->get());
    }
}