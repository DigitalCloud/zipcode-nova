<?php

namespace Digitalcloud\ZipCodeNova;

use Digitalcloud\ZipCodeNova\Rules\ZipCodeRule;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;


class ZipCode extends Text
{
    private $country_code;

    public function getRules(NovaRequest $request)
    {
        if ($this->country_code) {
            array_push($this->rules, new ZipCodeRule($this->country_code));
        }

        return [$this->attribute => is_callable($this->rules)
            ? call_user_func($this->rules, $request)
            : $this->rules];
    }

    public function setCountry($country_code)
    {
        $this->country_code = $country_code;

        return $this;
    }
}
