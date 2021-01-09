<?php
namespace SlashEquip\Sumy\Tests\Unit;

use SlashEquip\Sumy\Exceptions\NaNException;
use SlashEquip\Sumy\Sumy;
use SlashEquip\Sumy\Tests\TestCase;

class InitialisationTest extends TestCase
{
    /** @test */
    public function is_initialised_with_current_number_at_zero()
    {
        $sumy = new Sumy();

        $this->assertTrue($sumy instanceof Sumy);
        $this->assertEquals(0, $sumy->get());
    }

    /** @test */
    public function is_initialised_with_passed_number()
    {
        $sumy = new Sumy(300);

        $this->assertEquals(300, $sumy->get());
    }

    /** @test */
    public function is_initialised_with_instance_of_sumy()
    {
        $sumy = new Sumy(new Sumy(300));

        $this->assertEquals(300, $sumy->get());
    }

    /** @test */
    public function can_be_initialised_with_null()
    {
        $sumy = new Sumy(null);

        $this->assertEquals(0, $sumy->get());
    }

    /** @test */
    public function cannot_be_initialised_with_a_string()
    {
        $this->expectException(NaNException::class);
        new Sumy('hello');
    }

    /** @test */
    public function cannot_be_initialised_with_a_object()
    {
        $this->expectException(NaNException::class);
        new Sumy((new \stdClass()));
    }

    /** @test */
    public function can_be_initialised_with_a_null()
    {
        $this->expectException(NaNException::class);
        new Sumy(array());
    }
}