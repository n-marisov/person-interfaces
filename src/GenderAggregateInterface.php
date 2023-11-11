<?php

namespace Maris\interfaces\Person;

/***
 * Интерфейс для классов имеющих пол.
 */
interface GenderAggregateInterface
{
    public function getGender():GenderInterface;
}