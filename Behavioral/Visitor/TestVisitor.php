<?php
function __autoload($className)
{
    require_once $className . '.php';
}

$group = new Group('my group test name');
$user = new User('my user test name');

$visitor = new RolePrintVisitor;

$group->accept($visitor);
$user->accept($visitor);