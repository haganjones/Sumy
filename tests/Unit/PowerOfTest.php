<?php
namespace Tests\Unit;

use Sumy\Sumy;
use Tests\TestCase;

class PowerOfTest extends TestCase
{
    /** @test */
    public function can_power_of_a_number()
    {
        $sumy = new Sumy(10);

        $sumy->pow(2);
        $this->assertEquals(100, $sumy->get());
    }

    /** @test */
    public function can_chain_power_of_a_number()
    {
        $sumy = new Sumy(4);

        $sumy->pow(4)->pow(2);
        $this->assertEquals(65536, $sumy->get());
    }
}