# Nova Countdown

A countdown card for Laravel Nova.

## Installation

Install the package with composer using the following command:

```
composer require swooinc/nova-countdown
```

## Usage

You can pass it a Carbon instance for the countdown.

```php
use Swooinc\NovaCountdown\NovaCountdown;

...

protected function cards()
{
  return [
    (new NovaCountdown)->to(now()->addDays(30))
      ->label('30 Days Later'),
  ];
}
```

## License

The MIT License (MIT). Please see [License File](https://github.com/swooinc/nova-countdown/blob/master/LICENSE) for more information.
