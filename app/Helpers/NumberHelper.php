<?php

function localizedNumber($number)
{
    if (app()->getLocale() === 'np') {
        return nepaliNumber($number);
    }

    return $number;
}

function nepaliNumber($number)
{
    $nepaliDigits = [
        0 => '०',
        1 => '१',
        2 => '२',
        3 => '३',
        4 => '४',
        5 => '५',
        6 => '६',
        7 => '७',
        8 => '८',
        9 => '९',
    ];

    return strtr($number, $nepaliDigits);
}
