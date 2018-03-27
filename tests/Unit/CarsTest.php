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
        $car->year= 2017;
        $this->assertTrue($car->save());
        $this->assertInternalType('int',$car->year);
    }
    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        //dd($car);
        //$car->year ='2000'; To directly assign a value
        //$thi->assertTrue($car->update());
        $car-> where('id', '51')
            -> update(['year' => 2000]);
        $this->assertTrue($car->save());
    }
    public function testDeleteCar()
    {
        $car = Car::all()->last();
        //dd($car);
        $this->assertTrue($car->delete());
    }
    public function testCarsCount()
    {
        $cars = Car::all();
        $carsCount= count($cars);
        $this->assertEquals(50,$carsCount);
        $this->assertInternalType('int',$carsCount);
    }
   /* car year daatype is int public function testCarYearDataType()
    {
        $car = Car::find(1);
        //dd($car->year);
      // dd(gettype($car->Year));
        $this->assertInternalType('string',$car->Year);
    }*/
}
