# Password Generator

Two PHP password generators, one functional, one class-based. Both generate passwords of a length and complexity set by user input.

## functional-generate.php

`$ php functional-generate.php <length:int> <complexity:str[low|medium|high]>`

## oop-generate.php

I wrote this [bash script](/generate.sh) to generate a password from the `PasswordGenerator` class:

`$ ./generate.sh <length:int> <complexity:str[low|medium|high]>`

Alternatively, to generate the password in a php shell:

```
$ php -a
> require_once 'oop_generate.php';
> $password = new PasswordGenerator(<length:int>, <complexity:str[low|medium|high]>);
> echo $password;
```

## Complexity

Complexity Level | Pooled Characters
-- | --
low | lowercase letters, numbers
medium | lowercase letters, numbers, uppercase letters
high | lowercase letters, numbers, uppercase letters, symbols
