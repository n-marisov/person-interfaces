<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\SurnameInterface;

/***
 * Объекты способные хранить в себе фамилию.
 */
interface SurnameAggregateInterface
{
    public function getSurname():SurnameInterface|string|null;
}