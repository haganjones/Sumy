<?php

it('can square root a number', function () {
    $sumy = newSumy(100)
        ->sqrt();
    expect($sumy->get())
        ->toBe(10.0);
});


it('can chain square root a number', function () {
    $sumy = newSumy(441)
        ->sqrt()
        ->sqrt();

    expect($sumy->get())
        ->toBe(4.58257569495584);
});