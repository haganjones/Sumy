<?php
namespace Tests\Unit;

use HaganJones\Sumy\Sumy;
use Tests\TestCase;

class AdditionTest extends TestCase
{
    /** @test */
    public function can_add_a_number()
    {
        $sumy = new Sumy(110);

        $sumy->add(346.9105);
        $this->assertEquals(456.9105, $sumy->get());

        $sumy->add(0.9105);
        $this->assertEquals(457.821, $sumy->get());
    }

    /** @test */
    public function can_chain_add_a_number()
    {
        $sumy = new Sumy(110);

        $sumy->add(346.20)->add(100.40);
        $this->assertEquals(556.6, $sumy->get());
    }
}