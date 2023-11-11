<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\PersonInterface;
use Maris\interfaces\Person\Model\PersonStrictInterface;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonStrictAggregateInterface extends PersonAggregateInterface
{
    /**
     * Возвращает данные персоны.
     * Может вернуть NULL если персона не определена.
     * @return PersonInterface|null
     */
    public function getPerson():?PersonStrictInterface;
}