<?php
namespace SlashEquip\Sumy\Tests\Unit;

use SlashEquip\Sumy\Sumy;
use SlashEquip\Sumy\Tests\TestCase;

class SquareRootTest extends TestCase
{
    /** @test */
    public function can_square_root_a_number()
    {
        $sumy = new Sumy(100);

        $sumy->sqrt();
        $this->assertEquals(10, $sumy->get());
    }

    /** @test */
    public function can_chain_square_root_a_number()
    {
        $sumy = new Sumy(441);

        $sumy->sqrt()->sqrt();
        $this->assertEquals(4.58257569495584, $sumy->get());
    }
}