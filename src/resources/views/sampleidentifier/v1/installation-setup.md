# Installation and Setup

Docs can be installed via composer:

```php
composer require onetoefoot/sampleidentifier:^1.0.0
```

The package will automatically register a service provider.

You need to publish the database file:

php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="migrations"

```php
composer migrate
```

Remember API Authentication (Passport) also needs to be setup