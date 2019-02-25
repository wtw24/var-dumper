<?php

if (!function_exists('vd')) {
    function vd()
    {
        array_map(function ($x) {
            $damper = new \WTW24\Support\Debug\Dumper;
            $damper->dump($x);
        }, func_get_args());
    }
}

if (!function_exists('vdd')) {
    function vdd()
    {
        array_map(function ($x) {
            $damper = new \WTW24\Support\Debug\Dumper;
            $damper->dump($x);
        }, func_get_args());

        die(1);
    }
}

