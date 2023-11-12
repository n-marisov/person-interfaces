<?php

namespace Maris\interfaces\Person;

/***
 * Интерфейс для типа который может быть пустым.
 */
interface NullableInterface
{
    /**
     * Возвращает true если объект считается пустым.
     * @return bool
     */
    public function isNull():bool;
}