<?php

namespace Maris\interfaces\Person\Model;

use DateTimeInterface;
use Maris\interfaces\Person\AggregateNotNull\GenderAggregateNotNollInterface;
use Maris\interfaces\Person\AggregateStrict\FirstnameAggregateStrictInterface;
use Maris\interfaces\Person\AggregateStrict\PatronymicAggregateStrictInterface;
use Maris\interfaces\Person\AggregateStrict\SurnameAggregateStrictInterface;

/**
 * Персона которая обязана иметь все допустимые поля.
 */
interface PersonStrictInterface extends PersonInterface, SurnameAggregateStrictInterface,FirstnameAggregateStrictInterface,PatronymicAggregateStrictInterface,GenderAggregateNotNollInterface
{
    /***
     * Возвращает дату рождения.
     * Не может возвращать Null.
     * @return DateTimeInterface
     */
    public function getBirthDate(): DateTimeInterface;
}