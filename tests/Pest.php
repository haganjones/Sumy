<?php

use SlashEquip\Sumy\Sumy;

function newSumy($init = null): Sumy
{
    return new Sumy($init);
}