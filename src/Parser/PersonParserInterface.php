<?php

namespace Maris\interfaces\Person\Parser;

use Stringable;

interface PersonParserInterface
{
    /***
     * Ищет в строке объекты персоны.
     * @param string|Stringable $parsed
     * @return iterable
     */
    public function parse( string|Stringable $parsed ):iterable;
}