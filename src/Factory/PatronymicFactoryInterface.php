<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\PatronymicInterface;

interface PatronymicFactoryInterface
{
    public function create( string|\Stringable $patronymic ):?PatronymicInterface;
}