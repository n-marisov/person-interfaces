<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\PersonAggregateInterface;
use Maris\interfaces\Person\Aggregate\PersonStrictAggregateInterface;
use Maris\interfaces\Person\Model\PersonInterface;
use Maris\interfaces\Person\Model\PersonStrictInterface;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonStrictAggregateNotNullInterface extends PersonStrictAggregateInterface,PersonAggregateNotNullInterface
{
    /***
     * Возвращает данные персоны в строгом режиме.
     * Не может быть NULL.
     * @return PersonStrictInterface
     */
    public function getPerson():PersonStrictInterface;
}