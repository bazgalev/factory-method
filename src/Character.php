<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 13:54
 */

namespace App;


class Character
{
    /**
     * @var Weapon
     */
    private $weapon = null;

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function attack(): void
    {
        $this->weapon->attack();
    }
}