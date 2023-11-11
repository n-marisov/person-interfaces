<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\GenderInterface;

/***
 * Интерфейс для классов имеющих пол.
 */
interface GenderAggregateInterface
{
    public function getGender():?GenderInterface;
}