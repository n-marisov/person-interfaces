<?php

namespace Maris\interfaces\User\Model;

use Stringable;

/***
 * Интерфейс контактных данных пользователя.
 */
interface ContactInterface extends Stringable
{
    /***
     * Возвращает тип контакта.
     * @return string
     */
    public function getContactType():string;

    /***
     * Возвращает значение контакта.
     * @return string
     */
    public function getContactValue():string;

    /***
     * Возвращает строку которую можно использовать в качестве ссылки.
     * @return string
     */
    public function getContactHref():string;

    /***
     * Сравнивает два контакта на идентичность.
     * @param ContactInterface $contact
     * @return bool
     */
    public function equals( ContactInterface $contact ):bool;
}