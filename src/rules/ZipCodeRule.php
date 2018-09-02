<?php

namespace Digitalcloud\ZipCodeNova\Rules;

use Sirprize\PostalCodeValidator\Validator;
use Illuminate\Contracts\Validation\Rule;

class ZipCodeRule implements Rule
{
    private $country_code;
    private $value;

    public function __construct($country_code)
    {
        $this->country_code = $country_code;
    }

    public function passes($attribute, $value)
    {
        $validator = new Validator();
        if (!$this->country_code || !$value)
            return true;

        $this->value = $value;

        return $validator->isValid(strtoupper($this->country_code), $value);
    }

    public function message()
    {
        return "{$this->value} is not a valid zip code in {$this->country_code}";
    }
}