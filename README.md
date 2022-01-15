# laravel-arabic-numbers

[![Latest Version on Packagist][ico-version]][link-releases]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Scrutinizer][ico-scrutinizer]][link-scrutinizer]
[![Maintainability][ico-codeclimate-maintainability]][link-codeclimate-maintainability]
[![Codacy Badge][ico-codacy]][link-codacy]
[![StyleCI][ico-styleci]][link-styleci]
[![Coverage Status][ico-coveralls]][link-coveralls]
[![Total Downloads][ico-downloads]][link-packagist]

This package allows you to fix Arabic numbers input .

## Table of contents

- [Installation](#installation)
- [Usage](#usage)
  - [Laravel](#laravel)
  - [Lumen](#lumen)
- [Extending](#extending)
- [Change log](#change-log)
- [Testing](#testing)
- [Contributing](#contributing)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

## Installation

This package can be used in Laravel 5.4 and up.

You can install the package via composer:

```bash
composer require taghassan54/laravel-arabic-numbers
```

## Usage

### Laravel

In `app/Http/Kernel.php`, register the middleware:

```php
protected $middleware = [
    //...
    \TagHassan54\ArabicNumbers\Http\Middleware\ArabicNumbers::class,
]
```

### Lumen

In `bootstrap/app.php`, register the middleware:

```php
$app->middleware([
    \TagHassan54\ArabicNumbers\Http\Middleware\ArabicNumbers::class,
]);
```

## Extending

If you need to EXTEND the existing `ArabicNumbers` middleware note that:

- Your `ArabicNumbers` middleware needs to extend the `TagHassan54\ArabicNumbers\Http\Middleware\ArabicNumbers` middleware
- Add the fields you want to except form the middle ware to

```php
    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        //
    ];
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](.github/CONDUCT.md) for details.

## Security

If you discover any security-related issues, please email taghassan54@gmail.com instead of using the issue tracker.

## Credits

- [Taj Hassan][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/taghassan54
