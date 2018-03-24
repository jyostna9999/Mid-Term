<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = "Honda";
        $car->model= "Accord EXL";
        $car->year= "2017";
        $this->assertTrue($car->save());
    }
    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        //dd($car);
        //$car->year ='2000'; To directly assign a value
        $car-> where('id', '51')
            -> update(['year' => '2000']);
        $this->assertTrue($car->save());
    }
}
