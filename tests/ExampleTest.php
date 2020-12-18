<?php

namespace Spatie\UnitConversionPhpPackage\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\UnitConversionPhpPackage\Temperature;
use Spatie\UnitConversionPhpPackage\UnitConversionPhpPackageClass;
class ExampleTest extends TestCase
{
    /** @test */
//    public function it_can_convert_kilograms_to_lbs()
//    {
//        $lbs =UnitConversionPhpPackageClass::fromKilograms(100)->toLbs();
//
//        $this->assertEquals(220.4623, $lbs);
//    }

    public function it_can_convert_temperature_to_celsuius()
    {
        $fahrenheit =Temperature::forCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
