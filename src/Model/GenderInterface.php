<?php

namespace Maris\interfaces\Person\Model;

/**
 * Пол (Гендерная принадлежность).
 */
interface GenderInterface
{
    /**
     * Указывает что пол мужской.
     * @return bool
     */
    public function isMan():bool;

    /**
     * Указывает что пол не мужской.
     * @return bool
     */
    public function isNotMan():bool;


    /**
     * Указывает что пол женский.
     * @return bool
     */
    public function isGirl():bool;

    /**
     * Указывает что пол не женский.
     * @return bool
     */
    public function isNotGirl():bool;

    /**
     * Указывает что пол не определен.
     * @return bool
     */
    public function isUnknown():bool;

    /**
     * Указывает что пол определен.
     * Полная противоположность static::isUnknown()
     * @return bool
     */
    public function isSuccess():bool;
}