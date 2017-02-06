# CPR
[![Build Status](https://scrutinizer-ci.com/g/NiclasHedam/CPR/badges/build.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/CPR/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/NiclasHedam/CPR/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/CPR/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/NiclasHedam/CPR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/CPR/?branch=master)

A tool for validating Danish CPR-numbers, determining gender and calculating birthday.
Almost any CPR-numbers can be validated with modulus 11, which this tool does.
As of 2007, some CPR-numbers might return invalid, due to the lack of available CPR-numbers on some given dates.

## Installation

Install it using composer

`composer require niclashedam/cpr`

## Usage

Just include it and instantiate the CPR class.


```
use NiclasHedam/CPR;

$cpr = new CPR("2412958899");
var_dump($cpr->valid());
```

See [exampes/example.php](examples/example.php) for more examples

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Credits

This package is made possible with help from [Frax.dk Development](http://frax.dk) and [Hedam Technologies IvS](http://hedam.org).

## License

Released under the Apache License 2.0
