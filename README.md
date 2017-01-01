# Introduction

The alphabet library is a means to standardize iterating over a given alphabet.
It is useful for code that deals with encoding, cryptography or text manipulation.

# Installation

```shell
composer require hylianshield/alphabet:^1.0
```

# Usage

The alphabet constructor accepts 0 (zero) or more arguments, all of the type
string.

The alphabet can function as an iterator and give you the number of entries.

```php
<?php
use \HylianShield\Alphabet\Alphabet;

$alphabet = new Alphabet('A', 'B', 'C');

echo sprintf(
    'Found %d entries:',
    count($alphabet)
) . PHP_EOL;

foreach ($alphabet as $character) {
    echo $character . PHP_EOL;
}
```

Outputs:

```
Found 3 entries:
A
B
C
```

# Alphabet unpacking

If the input of the alphabet exists in a PHP array, one can use argument
unpacking to populate the alphabet:

```php
<?php
use \HylianShield\Alphabet\Alphabet;

$input    = range('A', 'Z');
$alphabet = new Alphabet(...$input);

echo sprintf(
    'Alphabet consists of %d characters.',
    count($alphabet)
);
```

Outputs:

```
Alphabet consists of 26 characters.
```

# Alphabet (de)normalization

When turning back the alphabet into a flat structure, one can use the built-in
 PHP function,
 [iterator_to_array](http://php.net/manual/en/function.iterator-to-array.php).
 
```php
<?php
use \HylianShield\Alphabet\Alphabet;

/**
 * @var Alphabet $alphabet
 * @var string[] $normalized
 */
$normalized = iterator_to_array($alphabet, false);

// And to de-normalize the alphabet again, simply unpack the array.
$alphabet = new Alphabet(...$normalized);
```

The second argument to `iterator_to_array` is set to `false`, since the keys do
not need to be interpreted and/or transformed.
It is a small performance optimization.

# Testing

To run the unit tests, to check the code, simply run one of the pre-configured
composer scripts:

- `composer test` Runs PHPUnit
- `composer coverage` Runs PHPUnit with text coverage
- `composer coverage-html` Runs PHPUnit with HTML coverage and opens the
  result in the browser.
