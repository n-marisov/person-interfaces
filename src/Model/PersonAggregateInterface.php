<?php

namespace Maris\interfaces\Person\Model;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonAggregateInterface
{
    public function getPerson():PersonInterface;
}