<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\PatronymicInterface;

interface PatronymicAggregateInterface
{
    /**
     * Возвращает фамилию.
     * @return PatronymicInterface|string|null
     */
    public function getPatronymic():PatronymicInterface|string|null;
}