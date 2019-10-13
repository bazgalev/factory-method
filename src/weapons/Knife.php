<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 13:59
 */

namespace App\weapons;


use App\Weapon;

class Knife implements Weapon
{
    public function attack(): void
    {
        echo 'Attack via knife!' . PHP_EOL;
    }
}