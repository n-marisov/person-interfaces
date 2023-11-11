<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\SurnameInterface;

interface SurnameFactoryInterface
{
    public function create( string|\Stringable $surname ):?SurnameInterface;
}