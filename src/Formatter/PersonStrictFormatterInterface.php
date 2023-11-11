<?php

namespace Maris\interfaces\Person\Formatter;

use Maris\interfaces\Person\Aggregate\PersonStrictAggregateInterface;
use Maris\interfaces\Person\Model\PersonStrictInterface;

interface PersonStrictFormatterInterface
{
    /***
     * Форматирует объект персоны в строку.
     * @param PersonStrictInterface|PersonStrictAggregateInterface $person
     * @return string
     */
    public function format( PersonStrictInterface|PersonStrictAggregateInterface $person ):string;
}