<?php

namespace Maris\interfaces\Person\AggregateStrict;


use Maris\interfaces\Person\AggregateNotNull\FirstnameAggregateNotNollInterface;
use Maris\interfaces\Person\Model\FirstnameInterface;

/***
 * Интерфейс обязывает возвращать только объект имени
 */
interface FirstnameAggregateStrictInterface extends FirstnameAggregateNotNollInterface
{
    public function getFirstname(): FirstnameInterface;
}