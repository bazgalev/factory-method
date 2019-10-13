<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.10.2019
 * Time: 12:59
 */

namespace App;


use App\weapons\Blaster;
use App\weapons\Knife;
use App\Weapons\Pistol;

class Game
{
    /**
     * @var int
     */
    private $level;

    /**
     * Code of game scenario
     * @throws \Exception
     */
    public function start(): void
    {
        $this->startLevel(1);
        $this->startLevel(2);
        $this->startLevel(3);
    }


    /**
     * @param int $level
     * @throws \Exception
     */
    private function startLevel(int $level): void
    {
        echo PHP_EOL;

        $this->setLevel($level);
        echo "--Starting $level level--" . PHP_EOL;

        $character = new Character();

        echo 'Danger! Enemy!' . PHP_EOL;
        //Use factory method createWeapon
        $character->setWeapon($this->createWeapon());
        $character->attack();
        echo '--Level completed--' . PHP_EOL;
    }

    /**
     * Factory method
     * @return Weapon
     * @throws \Exception
     */
    private function createWeapon(): Weapon
    {
        switch ($this->level) {
            case 1:
                return new Knife();
            case 2:
                return new Pistol();
            case 3:
                return new Blaster();
            default:
                throw new \Exception('Specified level does not exist');
        }
    }

    /**
     * @param int $level
     * @throws \Exception
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }


}