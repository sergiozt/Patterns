<?php
function __autoload($className)
{
    require_once $className . '.php';
}

$g = new Group('my group test name');
$u = new User('my user test name');

$visitor = new RolePrintVisitor;

$g->accept($visitor);
$u->accept($visitor);