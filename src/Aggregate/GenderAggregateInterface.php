<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\GenderInterface;

/***
 * Интерфейс для классов имеющих пол.
 */
interface GenderAggregateInterface
{
    /***
     * Возвращает пол.
     * @return GenderInterface|null
     */
    public function getGender():?GenderInterface;

    /**
     * Указывает указан ли пол.
     * @return bool
     */
    public function genderExists():bool;
}