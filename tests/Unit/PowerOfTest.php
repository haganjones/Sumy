<?php

it('can power of a number', function () {
    $sumy = newSumy(10)
        ->pow(2);
    expect($sumy->get())
        ->toBe(100.0);
});


it('can chain power of a number', function () {
    $sumy = newSumy(4)
        ->pow(4)
        ->pow(2);

    expect($sumy->get())
        ->toBe(65536.0);
});
