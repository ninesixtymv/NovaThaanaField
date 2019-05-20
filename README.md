# Thaana fields for Nova apps

This package contains a Nova field to add Thaana Field to resources. Under the hood it uses the [jawish/jtk](https://github.com/jawish/jtk).

## Installation

You can install this package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require ninesixtymv/nova-thaana-field
```

## Usage

#### Text

To make an Text field support Thaana, you can use the `Ninesixtymv\NovaThaanaField\ThaanaTextField` field in your Nova resource:

```php
namespace App\Nova;

use Ninesixtymv\NovaThaanaField\ThaanaTextField;

class Post extends Resource
{
  // ...

  public function fields(Request $request)
  {
    return [
      // ...

      ThaanaTextField::make('Title'),

      // ...
    ];
  }
}
```

#### Textarea

To make an Textarea field support Thaana, you can use the `Ninesixtymv\NovaThaanaField\ThaanaTextareaField` field in your Nova resource:

```php
namespace App\Nova;

use Ninesixtymv\NovaThaanaField\ThaanaTextField;

class Post extends Resource
{
  // ...

  public function fields(Request $request)
  {
    return [
      // ...

      ThaanaTextareaField::make('Description'),

      // ...
    ];
  }
}
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please create an issue.

## Credits

- [Jawish Hameed](https://github.com/jawish)

The javascript that enable Thaana in the fields is based on the [JTK](https://github.com/jawish/jtk) package created by [Jawish Hameed](https://github.com/jawish)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
