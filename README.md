# ObjectArray

## Install

Via Composer

``` bash
$ composer require vgleb/object-array
```

## Laravel 5 Implementation

Add a reference to `LaravelObjectArrayServiceProvider` to the providers array in `config/app.php`:

    'providers' => [
        'VGleb\ObjectArray\LaravelObjectArrayServiceProvider',
    ]

Then you can "make" (or inject) a `ObjectArray` instance anywhere in your app:

    $cookie = \App::make('VGleb\ObjectArray\ObjectArray');


> **TIP:** Laravel's [IoC container](http://laravel.com/docs/5.0/container) will automatically provide the Laravel specific `ObjectArray` implementation. This will use Laravel's [`ObjectArray`](http://laravel.com/docs/5.0/requests) goodness behind the scenes!


## Usage

``` php
$oa = new ObjectArray([
    'foo' => 'bar',
    'oa'  => new ObjectArray(['foo' => 'bar']),
]);

echo $oa->foo;
echo $oa->oa->foo;

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email i@h0n.ru instead of using the issue tracker.

## Credits

- [Voronov Gleb](https://github.com/VGleb)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
