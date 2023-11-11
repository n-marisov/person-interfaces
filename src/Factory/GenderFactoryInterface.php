<?php

namespace Maris\interfaces\Person\Factory;

use Maris\interfaces\Person\Model\GenderInterface;
use Stringable;

/***
 * Фабрика для создания объекта "Пол".
 */
interface GenderFactoryInterface
{
    /**
     * Создает объект GenderInterface из строки.
     * @param string|Stringable $genderString
     * @return GenderInterface
     */
    public function create( string|Stringable $genderString ):GenderInterface;
}