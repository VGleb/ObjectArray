# ObjectArray

## Install

Install this package through Composer

``` bash
$ composer require vgleb/object-array
```

## Laravel 5 Implementation

Add a reference to `LaravelObjectArrayServiceProvider` to the providers array in `config/app.php`:

    'providers' => [
        'VGleb\ObjectArray\LaravelObjectArrayServiceProvider',
    ]

Then you can "make" (or inject) a `ObjectArray` instance anywhere in your app:

    $oa = \App::make('VGleb\ObjectArray\ObjectArray', [$array]);

or

    use VGleb\ObjectArray\ObjectArray;

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

## Security

If you discover any security related issues, please email i@h0n.ru instead of using the issue tracker.

## Credits

- [Voronov Gleb](https://github.com/VGleb)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
