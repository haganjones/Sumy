<?php

it('can subtract a number', function () {
    $sumy = newSumy(456.9105)
        ->subtract(346.9105);

    expect($sumy->get())
        ->toBe(110.0);
});

it('can chain subtract a number', function () {
    $sumy = newSumy(456.9105)
        ->subtract(346.9105)
        ->subtract(3.7);

    expect($sumy->get())
        ->toBe(106.3);
});
