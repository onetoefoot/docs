# Installation and Setup

Docs can be installed via composer:

```php
composer require onetoefoot/docs:^1.0.0
```

The package will automatically register a service provider.

You need to publish the config file:

```php
php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="config"
```

To create your own views you need to publish them first

```php
php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="view"
```

Then in the config set

```php
'views_enabled' => true
```