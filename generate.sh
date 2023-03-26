#!/bin/bash

if [[ $# -lt 2 ]]; then
    echo "./generate.sh requires at least 2 arguments"
    echo
    echo "Usage: $0 <length:int> <characters:str[low|medium|high]>"

    exit 1
fi

php -r '
    require_once "oop-generate.php";
    $password = new PasswordGenerator('$1', "'$2'");
    echo $password . PHP_EOL;
'
