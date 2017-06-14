# Composer installation #

Add the following to your composer.json:

```json
{
    "require": {
        "bitcoinvietnam/shapeshift-php": "@dev"
    }
}
```

## Usage

Instantiate a Client object

```php
$client = new BitcoinVietnam\ShapeShift\Client();
```