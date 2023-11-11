<?php

namespace Maris\interfaces\Person\AggregateNotNull;

use Maris\interfaces\Person\Aggregate\GenderAggregateInterface;
use Maris\interfaces\Person\Model\GenderInterface;

interface GenderAggregateNotNollInterface extends GenderAggregateInterface
{
    public function getGender(): GenderInterface;
}