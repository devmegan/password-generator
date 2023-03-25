# Password Generator

Two PHP password generators, one functional, one class-based. Both generate passwords of a length and complexity set by user input.

## functional-generate.php

`$ php functional-generate.php <length> <complexity>`

## oop-generate.php

```
$ php -a
> require_once 'oop_generate.php'
> $password = new PasswordGenerator(<length>, <complexity>);
> echo $password;
```
