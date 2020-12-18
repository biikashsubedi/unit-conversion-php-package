<?php

namespace Spatie\UnitConversionPhpPackage;

use DeepCopy\Exception;

class UnitConversionPhpPackageClass
{
    private float $kilograms;

//    public static function fromKilograms(float $kilograms): self
//    {
//        $myArray = [
//            'test',
//            'test2'
//        ];
//    }

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
