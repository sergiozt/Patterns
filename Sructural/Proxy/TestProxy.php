<?php
/**
 * Created by PhpStorm.
 * Date: 10.11.14
 * Time: 12:07
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$path = 'proxy_diagram.gif';
$client = new Client();

$image = new RawImage($path);   // loading of the BLOB takes place
echo $client->tag($image);

$image = new ProxyImage($path); // loading does not take place even here
echo $client->tag($image);

