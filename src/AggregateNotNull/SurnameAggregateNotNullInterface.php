<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\SurnameAggregateInterface;
use Maris\interfaces\Person\Model\SurnameInterface;

interface SurnameAggregateNotNullInterface extends SurnameAggregateInterface
{
    public function getSurname(): SurnameInterface;
}