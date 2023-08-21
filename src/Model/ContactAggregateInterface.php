<?php

namespace Maris\interfaces\User\Model;

/***
 * Интерфейс для объектов способный в себе хранить
 * один контакт.
 */
interface ContactAggregateInterface
{
    public function getContact():ContactInterface;
}