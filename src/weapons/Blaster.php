<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 14:00
 */

namespace App\weapons;


use App\Weapon;

class Blaster implements Weapon
{
    public function attack(): void
    {
        echo 'Pew-pew via blaster!' . PHP_EOL;
    }
}