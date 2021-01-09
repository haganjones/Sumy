<?php

it('can add a number', function () {
    $sumy = newSumy(110)
        ->add(346.9105);

    expect($sumy->get())
        ->toBe(456.9105);
});

it('can chain add a number', function () {
    $sumy = newSumy(110)
        ->add(346.20)
        ->add(100.40);

    expect($sumy->get())
        ->toBe(556.6);
});