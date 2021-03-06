# JSON Column for Backpack 5

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides an advanced ```json``` column type for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. The main features as opposed to Backpack's stock `json` column are that:
- you can expand and collapse values in the json keys;
- the keys and values are of a different colours;

If your JSON is small, [the `json` column in backpack core](https://github.com/Laravel-Backpack/CRUD/pull/1951) is likely sufficient for your needs. But if you have a large JSON, this column will really shine. 

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
    'type'  => 'view',
    'view' => 'json-column-for-backpack::columns.json',
]);
```


## Overwriting

If you need to change the column in any way, you can easily publish the file to your app, and modify that file any way you want. But please keep in mind that you will not be getting any updates.

**Step 1.** Copy-paste the blade file to your directory:
```bash
# create the columns directory if it's not already there
mkdir -p resources/views/vendor/backpack/crud/columns

# copy the blade file inside the folder we created above
cp -i vendor/stephanus-tantiono/json-column-for-backpack/src/resources/views/columns/json.blade.php resources/views/vendor/backpack/crud/columns/json_viewer.blade.php
```

**Step 2.** Load the published file instead of the one in the vendor directory:
```diff
$this->crud->addColumn([
    'name'  => 'column_name',
    'type'  => 'json_viewer',
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
- [Steve](https://github.com/stephanus-tantiono) for creating this column
- [ziming](https://github.com/ziming) for supervising
- [Cristian Tabacitu](https://github.com/tabacitu) for creating backpack and troubleshooting issues with the column not loading correctly in the package
- [Roman Makudera](https://github.com/LorDOniX) for creating [json-viewer](https://github.com/LorDOniX/json-viewer)

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/stephanus-tantiono/json-column-for-backpack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/stephanus-tantiono/json-column-for-backpack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/stephanus-tantiono/json-column-for-backpack
[link-downloads]: https://packagist.org/packages/stephanus-tantiono/json-column-for-backpack
[link-author]: https://github.com/stephanus-tantiono
[link-contributors]: ../../contributors
