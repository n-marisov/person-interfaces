<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\PersonInterface;
use Stringable;

/***
 * Фабрика создания персоны.
 */
interface PersonFactoryInterface
{
    public function create( string|Stringable $personString ):PersonInterface;
}