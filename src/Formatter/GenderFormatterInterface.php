<?php

namespace Maris\interfaces\Person\Formatter;

use Maris\interfaces\Person\Aggregate\GenderAggregateInterface;
use Maris\interfaces\Person\Model\GenderInterface;

interface GenderFormatterInterface
{
    /**
     * Форматирует пол в строку.
     * @param GenderInterface|GenderAggregateInterface $gender
     * @return string
     */
    public function format( GenderInterface|GenderAggregateInterface $gender ):string;
}