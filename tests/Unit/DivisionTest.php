<?php

it('can divide a number', function () {
    $sumy = newSumy(100)
        ->divide(4);

    expect($sumy->get())
        ->toBe(25.0);
});

it('can chain divide a number', function () {
    $sumy = newSumy(100)
        ->divide(10)
        ->divide(2);

    expect($sumy->get())
        ->toBe(5.0);
});
