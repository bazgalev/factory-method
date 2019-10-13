<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 13:49
 */

namespace App\Weapons;


use App\Weapon;

class Pistol implements Weapon
{
    public function attack(): void
    {
        echo 'Bang-bang via pistol!' . PHP_EOL;
    }
}