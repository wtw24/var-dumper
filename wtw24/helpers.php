<?php

if (!function_exists('d')) {
    function d()
    {
        array_map(function ($x) {
            $damper = new \WTW24\Support\Debug\Dumper;
            $damper->dump($x);
        }, func_get_args());
    }
}

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            $damper = new \WTW24\Support\Debug\Dumper;
            $damper->dump($x);
        }, func_get_args());

        die(1);
    }
}

