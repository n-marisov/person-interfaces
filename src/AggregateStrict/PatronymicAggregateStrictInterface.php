<?php

namespace Maris\interfaces\Person\AggregateStrict;

use Maris\interfaces\Person\AggregateNotNull\PatronymicAggregateNotNullInterface;
use Maris\interfaces\Person\Model\PatronymicInterface;

/***
 * Интерфейс обязывает возвращать только объект Отчества.
 */
interface PatronymicAggregateStrictInterface extends PatronymicAggregateNotNullInterface
{
    public function getPatronymic(): PatronymicInterface|string;
}