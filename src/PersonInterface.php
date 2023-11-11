<?php

namespace Maris\interfaces\Person;

use DateTimeInterface;

/***
 * Интерфейс персоны (человека)
 */
interface PersonInterface
{
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
     * @return GenderInterface|null
     */
    public function getGender():?GenderInterface;
}