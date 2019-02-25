<?php

namespace WTW24\Support\Debug;

use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

class Dumper
{
    /**
     * https://symfony.com/doc/current/components/var_dumper/advanced.html
     * @param mixed $value
     * @throws \Exception
     */
    public function dump($value)
    {
        if (class_exists('Symfony\Component\VarDumper\Dumper\CliDumper')) {
            $dumper = 'cli' === PHP_SAPI ? new CliDumper : new HtmlDumper;

            $varCloner = new VarCloner;
            $varCloner->setMaxItems(-1);
            $dumper->dump($varCloner->cloneVar($value));
        } else {
            var_dump($value);
        }
    }
}
