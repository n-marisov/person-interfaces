<?php

namespace Maris\interfaces\Person\Aggregate;

use Maris\interfaces\Person\Model\PatronymicInterface;

interface PatronymicAggregateInterface
{
    /**
     * Возвращает фамилию.
     * @return PatronymicInterface|null
     */
    public function getPatronymic():PatronymicInterface|null;

    /***
     * Указывает наличие отчества.
     * @return bool
     */
    public function patronymicExists():bool;
}