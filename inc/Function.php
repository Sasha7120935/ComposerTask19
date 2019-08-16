<?php

//function myAutoLoad($class)
{
    $path = explode('\\', $class);
    if ($path[0] === 'ComposerTask19') {
        unset($path[0]);
    }
    $class = implode('\\',$path);
    $file = __PROJECT_DIR__. $class . '.php';
    if (file_exists($file))
    {
        //require_once $file;
    }
}
