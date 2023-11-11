<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\PersonAggregateInterface;
use Maris\interfaces\Person\Model\PersonInterface;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonAggregateNotNullInterface extends PersonAggregateInterface
{
    /***
     * Возвращает данные персоны.
     * Не может быть NULL.
     * @return PersonInterface
     */
    public function getPerson():PersonInterface;
}