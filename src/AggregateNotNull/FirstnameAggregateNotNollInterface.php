<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\FirstnameAggregateInterface;
use Maris\interfaces\Person\Model\FirstnameInterface;

interface FirstnameAggregateNotNollInterface extends FirstnameAggregateInterface
{
    public function getFirstname(): FirstnameInterface|string;
}