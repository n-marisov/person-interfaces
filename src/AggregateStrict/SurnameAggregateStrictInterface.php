<?php

namespace Maris\interfaces\Person\AggregateStrict;

use Maris\interfaces\Person\AggregateNotNull\SurnameAggregateNotNullInterface;
use Maris\interfaces\Person\Model\SurnameInterface;

/***
 * Интерфейс обязывает возвращать только объект Фамилии.
 */
interface SurnameAggregateStrictInterface extends SurnameAggregateNotNullInterface
{
    public function getSurname(): SurnameInterface;
}