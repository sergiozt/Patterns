<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 03.11.14
 * Time: 18:38
 */
function __autoload($className)
{
    require_once $className . '.php';
}

$media = new Director(new HDPlayerBuilder());
$player = $media->getPlayer();
echo $player->play('some HD record');

$media = new Director(new SimplePlayerBuilder());
$player = $media->getPlayer();
echo $player->play('some Simple record');