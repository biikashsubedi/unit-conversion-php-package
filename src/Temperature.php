<?php

namespace Spatie\UnitConversionPhpPackage;

use DeepCopy\Exception;

class Temperature
{
    private float $celsius;

//    public static function forcelcuis(float $kilograms): self
//    {
//        $myArray = [
//            'test',
//            'test2'
//        ];
//    }

    public static function forCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
