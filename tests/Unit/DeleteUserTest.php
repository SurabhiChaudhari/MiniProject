<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $userdelete= new User();
        $userdelete->name = 'Surabhi Chaudhari';
        $userdelete->email = 'sc2263@njit.edu';
        $userdelete->password = '12021994';
        $userdelete->save();
        $this->assertTrue($userdelete->delete());
    }
}
