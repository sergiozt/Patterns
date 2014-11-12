<?php
/**
 * User: Sergii Zheleznytskyi 
 * Date: 12.11.14
 * Time: 19:21
 */
function __autoload($className)
{
    require_once $className . '.php';
}

$user = new User();
$user->attach(new UserObserver());
$userData = array(
    'name' =>'testName',
    'email' =>'testEmail@gmail.com'
);

echo $user->create($userData);