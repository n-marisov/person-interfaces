<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\FirstnameInterface;
use Maris\interfaces\Person\Model\SurnameInterface;

interface FirstnameFactoryInterface
{
    public function create( string|\Stringable $firstname ):?FirstnameInterface;
}