<?php

it('can multiply a number', function () {
    $sumy = newSumy(100)
        ->multiply(7);

    expect($sumy->get())
        ->toBe(700.0);
});

it('can chain multiply a number', function () {
    $sumy = newSumy(100)
        ->multiply(4)
        ->multiply(2.5);

    expect($sumy->get())
        ->toBe(1000.0);
});
