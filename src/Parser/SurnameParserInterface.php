<?php

namespace Maris\interfaces\Person\Parser;

interface SurnameParserInterface
{
    public function parse( string|\Stringable $parsed ):iterable;
}