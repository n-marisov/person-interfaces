<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\FirstnameInterface;

interface FirstnameAggregateInterface
{
    /***
     * Возвращает имя.
     * @return FirstnameInterface|string|null
     */
    public function getFirstname():FirstnameInterface|string|null;
}