# JSON Column for Backpack 5

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a ```json``` column type for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel.

Readme is not ready yet!

## What is the difference between the json column in Backpack Core and this?

The main difference between this json column and the json column in Backpack core are:
- You can expand and collapse values in the json keys
- The keys and values are of a different colours.

So this json column shines when you have a large json. If your json is small, [the json column in backpack core](https://github.com/Laravel-Backpack/CRUD/pull/1951) is likely sufficient for your needs.

## Screenshots

![https://user-images.githubusercontent.com/52034225/167371557-63eef12b-09c7-49c8-a41a-fc503d3b6908.gif](https://user-images.githubusercontent.com/52034225/167371557-63eef12b-09c7-49c8-a41a-fc503d3b6908.gif)

## Installation

Via Composer

``` bash
composer require stephanus-tantiono/json-column-for-backpack
```

## Usage

Inside your custom CrudController:

```php
$this->crud->addColumn([
    'name'  => 'column_name',
    'type'  => 'json',
    'view_namespace' => 'json-column-for-backpack::columns',
]);
```

Notice the ```view_namespace``` attribute - make sure that is exactly as above, to tell Backpack to load the column from this _addon package_, instead of assuming it's inside the _Backpack\CRUD package_.


## Overwriting

If you need to change the column in any way, you can easily publish the file to your app, and modify that file any way you want. But please keep in mind that you will not be getting any updates.

**Step 1.** Copy-paste the blade file to your directory:
```bash
# create the columns directory if it's not already there
mkdir -p resources/views/vendor/backpack/crud/columns

# copy the blade file inside the folder we created above
cp -i vendor/stephanus-tantiono/json-column-for-backpack/src/resources/views/columns/json.blade.php resources/views/vendor/backpack/crud/columns/json.blade.php
```

**Step 2.** Remove the vendor namespace wherever you've used the column:
```diff
$this->crud->addColumn([
-   'view_namespace' => 'json-column-for-backpack::columns'
]);
```

**Step 3.** Uninstall this package. Since it only provides one file - ```json.blade.php```, and you're no longer using that file, it makes no sense to have the package installed:

```bash
composer remove stephanus-tantiono/json-column-for-backpack
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Security

If you discover any security related issues, please email [the author](composer.json) instead of using the issue tracker.

## Credits
- [Steve](https://github.com/stephanus-tantiono)
- [ziming](https://github.com/ziming)
- [Cristian Tabacitu](https://github.com/tabacitu)
- [Roman Makudera](https://github.com/LorDOniX)

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/stephanus-tantiono/json-column-for-backpack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/stephanus-tantiono/json-column-for-backpack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/stephanus-tantiono/json-column-for-backpack
[link-downloads]: https://packagist.org/packages/stephanus-tantiono/json-column-for-backpack
[link-author]: https://github.com/stephanus-tantiono
[link-contributors]: ../../contributors
