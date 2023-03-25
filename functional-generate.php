<?php

$length = $argv[1];
$complexity = $argv[2];

echo generate($length, $complexity);

function generate(int $length = 8, string $complexity = 'medium'): string
{
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $pool = getPool($complexity, $lowercase, $uppercase, $numbers, $symbols);

    $password = '';
    $poolLength = strlen($pool);

    for ($i = 0; $i < $length; $i++) {
        $password .= getRandomPoolChar($pool, $poolLength);
    }

    return $password."\n";
}

function getPool($complexity, $lowercase, $uppercase, $numbers, $symbols): string
{
    $pool = '';

    switch ($complexity) {
        case 'low':
            $pool = $lowercase.$numbers;
            break;
        case 'medium':
            $pool = $lowercase.$uppercase.$numbers;
            break;
        case 'high':
            $pool = $lowercase.$uppercase.$numbers.$symbols;
            break;
    }

    return $pool;
}

function getRandomPoolChar($pool, $poolLength): string
{
    return $pool[rand(0, $poolLength - 1)];
}
