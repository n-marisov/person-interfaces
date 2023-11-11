<?php

namespace Maris\interfaces\Person\Parser;

interface PatronymicParserInterface
{
    public function parse( string|\Stringable $parsed ):iterable;
}