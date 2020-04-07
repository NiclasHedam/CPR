# CPR
[![Build Status](https://travis-ci.org/NiclasHedam/CPR.svg?branch=master)](https://travis-ci.org/NiclasHedam/CPR)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fniclashedam%2FCPR.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fniclashedam%2FCPR?ref=badge_shield)

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

## License

Released under the MIT license


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fniclashedam%2FCPR.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fniclashedam%2FCPR?ref=badge_large)
