<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user= new User();
        $user->name = 'Surabhi Chaudhari';
        $user->email = 'sc22633@njit.edu';
        $user->password = '12021994';
        $this->assertTrue($user->save());
        //$this->assertTrue(true);
    }
}
