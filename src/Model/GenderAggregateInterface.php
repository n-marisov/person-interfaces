<?php

namespace Maris\interfaces\Person\Model;

/***
 * Интерфейс для классов имеющих пол.
 */
interface GenderAggregateInterface
{
    public function getGender():GenderInterface;
}