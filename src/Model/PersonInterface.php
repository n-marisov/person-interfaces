<?php

namespace Maris\interfaces\Person\Model;

use DateTimeInterface;
use Maris\interfaces\Person\Aggregate\FirstnameAggregateInterface;
use Maris\interfaces\Person\Aggregate\GenderAggregateInterface;
use Maris\interfaces\Person\Aggregate\PatronymicAggregateInterface;
use Maris\interfaces\Person\Aggregate\SurnameAggregateInterface;

/***
 * Интерфейс персоны (человека)
 */
interface PersonInterface extends SurnameAggregateInterface, FirstnameAggregateInterface, PatronymicAggregateInterface, GenderAggregateInterface
{
    /***
     * Возвращает дату рождения.
     * @return DateTimeInterface|null
     */
    public function getBirthDate(): ?DateTimeInterface;

    /**
     * Указывает на то что у персоны определена дата рождения.
     * @return bool
     */
    public function birthDateExists():bool;

    /***
     * Указывает на то что все поля заполнены.
     * @return bool
     */
    public function isStrict():bool;

}