<?php

// autoload class
function autoload($class) {
    // set file class
    $file = APP . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file))
        require_once $file;
    else
        throw new Exception(sprintf('Class { %s } Not Found!', $class));
}

// set autoload function
spl_autoload_register('autoload');

