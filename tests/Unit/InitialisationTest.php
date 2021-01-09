<?php

use SlashEquip\Sumy\Exceptions\NaNException;
use SlashEquip\Sumy\Sumy;

it('is initialised with current number at zero', function () {
    $sumy = new Sumy();

    expect($sumy)->toBeInstanceOf(Sumy::class);
    expect($sumy->get())->toBe(0.0);
});

it('is initialised with passed number', function () {
    $sumy = new Sumy(300);

    expect($sumy->get())->toBe(300.0);
});

it('is initialised with instance of sumy', function () {
    $sumy = new Sumy(new Sumy(300));

    expect($sumy->get())->toBe(300.0);
});

it('can be initialised with null', function () {
    $sumy = new Sumy(null);

    expect($sumy->get())->toBe(0.0);
});

it('cannot be initialised with a string', function () {
    new Sumy('hello');
})->expectException(NaNException::class);

it('cannot be initialised with a object', function () {
    new Sumy((new \stdClass()));
})->expectException(NaNException::class);

it('can be initialised with a null', function () {
    new Sumy(array());
})->expectException(NaNException::class);
