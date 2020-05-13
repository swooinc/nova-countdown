# Nova Countdown

A countdown card for Laravel Nova.

## Installation

Install the package with composer using the following command:

```
composer require swooinc/nova-countdown
```

## Usage

You can pass it a Carbon instance for the countdown.

### app/Nova/User.php

```php
<?php

namespace App\Nova;

use Swooinc\NovaCountdown\NovaCountdown;

class User extends Resource
{
    // Other methods
    
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new NovaCountdown)
                ->to(now()->addDays(30))
                ->label('30 Days Later'),
        ];
    }
}
```

## License

The MIT License (MIT). Please see [License File](https://github.com/swooinc/nova-countdown/blob/master/LICENSE) for more information.
