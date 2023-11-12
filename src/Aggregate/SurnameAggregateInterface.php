<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\SurnameInterface;

/***
 * Объекты способные хранить в себе фамилию.
 */
interface SurnameAggregateInterface
{
    /***
     * Возвращает фамилию.
     * @return SurnameInterface|string|null
     */
    public function getSurname():SurnameInterface|string|null;

    /***
     * Указывает наличие фамилии.
     * @return bool
     */
    public function surnameExists():bool;
}