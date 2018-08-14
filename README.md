Docs
===

Installation
---

The package can be installed via composer:

```bash
composer require onetoefoot/docs
```

The package will automatically register the service provider.


You can optionally publish the config file with:

```bash
php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="config"
```

This is the contents of the published config file:

```bash
return [
];
```

If you are using Laravel in a version < 5.5, the service provider must be registered as a next step:

```php
// config/app.php
'providers' => [
    ...
    // add code here
];
```

Usage
---

in your blade template
@include('Docs::index');

```


Changelog
---

Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---

There is no testing

Contributing
---


Security
---

If you discover any security related issues, please email <jcandothers@gmail.com> or use the issue tracker of GitHub.

About
---

License
---
The MIT License (MIT). Please see [License File](LICENSE) for more information.
