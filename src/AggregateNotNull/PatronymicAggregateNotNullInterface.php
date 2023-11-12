<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\PatronymicAggregateInterface;
use Maris\interfaces\Person\Model\PatronymicInterface;

interface PatronymicAggregateNotNullInterface extends PatronymicAggregateInterface
{
    public function getPatronymic(): PatronymicInterface;
}