# Password Generator

Two PHP password generators, one functional, one class-based. Both generate passwords of a length (`int`) and complexity (`'low'`, `'medium'`, `'high'`) set by user input.

## functional-generate.php

`$ php functional-generate.php <length> <complexity>`

## oop-generate.php

I wrote this [bash script](/generate.sh) to generate a password from the `PasswordGenerator` class:

`$ ./generate.sh <length> <complexity>`

Alternatively, to generate the password in a php shell:

```
$ php -a
> require_once 'oop_generate.php';
> $password = new PasswordGenerator(<length>, <complexity>);
> echo $password;
```
