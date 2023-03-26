#!/bin/bash

if [[ $# -lt 2 ]]; then
    echo "./generate.sh requires at least 2 arguments"
    echo
    echo "Usage: $0 <length:int> <characters:str[low|medium|high]>"

    exit 1
fi

if [[ ! $1 =~ ^[0-9]+$ || ! $2 =~ ^(low|medium|high)$ ]]; then
    echo "./generate.sh requires arguments in the following format"
    echo
    echo "Usage: $0 <length:int> <characters:str[low|medium|high]>"
    echo
    echo "    length      : positive integer for length of password."
    echo "    complexity  : 'low', 'medium', or 'high' for the complexity of the password."

    exit 1
fi

php -r '
    require_once "oop-generate.php";
    $password = new PasswordGenerator('$1', "'$2'");
    echo $password . PHP_EOL;
'
