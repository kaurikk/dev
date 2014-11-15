<?php

spl_autoload_register(function ($class)
{
    $parts = explode('\\', $class);
    require implode('/', $parts) . '.php';
});
