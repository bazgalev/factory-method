<?php

require_once 'vendor/autoload.php';

$game = new \App\Game();
try {
    $game->start();
} catch (Exception $e) {
    echo 'Something wrong: ' . $e->getMessage() . PHP_EOL;
}
