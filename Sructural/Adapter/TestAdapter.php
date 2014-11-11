<?php
/**
 * User: Sergii Zheleznytskyi
 * Date: 11.11.14
 * Time: 12:15
 */

function __autoload($className)
{
    require_once $className . '.php';
}

$massage = 'some message text for Facebook';
$facebook = new FacebookAdapter(new Facebook());

$facebook->post($massage);


$massage = 'some message Twitter';
$facebook = new TwitterAdapter(new Twitter());

$facebook->post($massage);