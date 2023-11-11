<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\PersonInterface;
use Maris\interfaces\Person\Model\PersonStrictInterface;
use Stringable;

/***
 * Фабрика создания персоны.
 */
interface PersonStrictFactoryInterface
{
    public function create( string|Stringable $personString ):PersonStrictInterface;
}