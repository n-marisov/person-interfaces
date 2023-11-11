<?php

namespace Maris\interfaces\Person\Formatter;

use Maris\interfaces\Person\Aggregate\PersonAggregateInterface;
use Maris\interfaces\Person\Model\PersonInterface;

interface PersonFormatterInterface
{
    /***
     * Форматирует объект персоны в строку.
     * @param PersonInterface|PersonAggregateInterface $person
     * @return string
     */
    public function format( PersonInterface|PersonAggregateInterface $person ):string;
}