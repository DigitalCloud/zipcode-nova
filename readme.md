# Zipcode Nova

Validate Zipcode field based on your selected country

### Screenshots

![Form screenshot](https://www.imageupload.co.uk/images/2018/09/02/image.png)

### Install

Run this command into your nova project:
`composer require digitalcloud/zipcode-nova`

### Add it to your Nova Resource:

```php
use Digitalcloud\ZipCodeNova\ZipCode;

ZipCode::make('zipcode')->setCountry('US'),
```

## Country Codes

Postal-code-validator uses [ISO 3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) 2-letter country codes

### Roadmap

* [ ] Specify the country field for dynamic country selection
* [ ] Support multiple countries on the same request
