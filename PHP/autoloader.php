<?php

spl_autoload_register('autoLoad');

function autoLoad($class)
{
    $parts = explode('\\', $class);
    require implode('/', $parts) . '.php';
}
