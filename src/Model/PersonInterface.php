<?php

namespace Maris\interfaces\Person\Model;

use DateTimeInterface;

/***
 * Интерфейс персоны (человека)
 */
interface PersonInterface
{
    /***
     * Женский пол.
     */
    final public const GENDER_GIRL = -1;

    /***
     * Пол не определен.
     */
    final public const GENDER_UNKNOWN = 0;

    /***
     * Мужской пол.
     */
    final public const GENDER_MAN = 1;


    /***
     * Возвращает фамилию.
     * @return string
     */
    public function getSurname():string;

    /***
     * Возвращает имя.
     * @return string
     */
    public function getFirstname():string;

    /***
     * Возвращает отчество.
     * @return string
     */
    public function getPatronymic():string;

    /***
     * Возвращает дату рождения.
     * @return DateTimeInterface|null
     */
    public function getBirthDate(): ?DateTimeInterface;

    /***
     * Возвращает пол персоны.
     * @return int<-1,1>
     */
    public function getGender():int;
}