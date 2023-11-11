<?php

namespace Maris\interfaces\Person\Parser;

interface FirstnameParserInterface
{
    public function parse( string|\Stringable $parsed ):iterable;
}