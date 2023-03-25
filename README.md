# Password Generator

<img src="readme/generate.gif" alt="screen recording of generating passwords using bash script" />

Two PHP password generators, one functional, one class-based. Both generate passwords of a length and complexity set by user input.

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

## functional-generate.php

`$ php functional-generate.php <length:int> <complexity:str[low|medium|high]>`

## Complexity

Complexity Level | Pooled Characters
-- | --
low | lowercase letters, numbers
medium | lowercase letters, numbers, uppercase letters
high | lowercase letters, numbers, uppercase letters, symbols

---

## Releases

- [(v1.0.0) Bash-Powered Password Generator in PHP](https://github.com/devmegan/password-generator/releases/tag/v1.0.0)
