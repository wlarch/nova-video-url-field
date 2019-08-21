# Laravel Nova VideoUrl Field

Parse a Youtube or Vimeo link to show embed video player as a Nova Field.

## Installation

**Composer**

```bash
composer require centiva/nova-video-url-field
```

## Usage
Define the following fields in your resource in the ```fields``` method:
```php
use Centiva\NovaVideoUrlField\VideoUrl;

...

VideoUrl::make('Url')
```