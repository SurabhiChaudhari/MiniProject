<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $cardelete= new car();
        $cardelete->make = 'Toyota';
        $cardelete->model = 'Pink';
        $cardelete->year = '1994';
        $cardelete->save();
        $this->assertTrue($cardelete->delete());
    }
}
