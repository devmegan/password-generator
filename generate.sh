#!/bin/bash

php -r '
    require_once "oop-generate.php";
    $password = new PasswordGenerator('$1', "'$2'");
    echo $password . PHP_EOL;
'
