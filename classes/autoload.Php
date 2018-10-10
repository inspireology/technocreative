<?php

spl_autoload_register(function ($class_name) {
include $class_name . '.php';
//load underscore case of the camel case name
});

//https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md