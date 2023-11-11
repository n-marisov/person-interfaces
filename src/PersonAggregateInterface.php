<?php

namespace Maris\interfaces\Person;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonAggregateInterface
{
    /**
     * Возвращает данные персоны.
     * Может вернуть NULL если персона не определена.
     * @return PersonInterface|null
     */
    public function getPerson():?PersonInterface;
}