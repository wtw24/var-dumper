<?php

function d()
{
    array_map(function ($x) {
        $damper = new \WTW24\Support\Debug\Dumper;
        $damper->dump($x);
    }, func_get_args());
}


function dd()
{
    array_map(function ($x) {
        $damper = new \WTW24\Support\Debug\Dumper;
        $damper->dump($x);
    }, func_get_args());

    die(1);
}
