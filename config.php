<?php


define('SCRIPT', str_replace('\\', '/', rtrim(__DIR__, '/')) . '/');
define('APP', SCRIPT . 'app/');
define('CONTROLLERS', SCRIPT . 'app/Controllers/');
define('MODELS', SCRIPT . 'app/Models/');

define('DATABASE', [
    'Host'   => 'localhost',
    'Name'   => 'test',
    'User'   => '',
    'Pass'   => ''
]);
