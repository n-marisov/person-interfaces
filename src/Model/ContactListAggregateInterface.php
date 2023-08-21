<?php

namespace Maris\interfaces\Person\Model;

/**
 * Интерфейс для объектов способных хранить несколько контактов.
 */
interface ContactListAggregateInterface
{
    /***
     * @return iterable<ContactInterface>
     */
    public function getContactList():iterable;
}