<?php

namespace Maris\interfaces\Person;

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