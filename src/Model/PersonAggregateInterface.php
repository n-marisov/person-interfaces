<?php

namespace Maris\interfaces\User\Model;

/***
 * Интерфейс объектов способных хранить данные о человеке.
 */
interface PersonAggregateInterface
{
    public function getPerson():PersonInterface;
}