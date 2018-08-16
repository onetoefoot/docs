# Basic

To create your own views you need to publish them first

```php
php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="view"
```

To let the package know you are using your own views set the .env variable below

```php
DOCS_VIEW_ENABLED=true
```

You can also change the path of your views, the path root is resources/views

```php
DOCS_VIEW_PATH="/vendor/docs"
```

The directory structure for the documents.

```php
resources/
    views/
        docs/ 'This is the package name'
            v1/ 'The current version you are on'
                introduction.md
                requirements.md
                usage/ 'A heading for the next group of files'
                    basic.md
```