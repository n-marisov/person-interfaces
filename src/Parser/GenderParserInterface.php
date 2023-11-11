<?php

namespace Maris\interfaces\Person\Parser;

use Stringable;

interface GenderParserInterface
{
    /***
     * Ищет в строке пол.
     * @param string|Stringable $parsed
     * @return iterable
     */
    public function parse( string|Stringable $parsed ):iterable;
}