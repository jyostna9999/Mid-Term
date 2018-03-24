<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user->name ='Jyostna';
        $user->email ='ju36@njit.edu';
        $user->password='12345';
        $this->assertTrue($user->save());
    }
    public function testUpdateUserName()
    {
       $user = User::all()->last();
       //dd($user);
        //$user->name="Steve Smith"; To directly update the name
       $user-> where('name', 'Jyostna')
            -> update(['name' => 'Steve Smith']);

       $this->assertTrue($user->save());
    }
    public function testDeleteUser()
    {
        $user = User::all()->last();
        //dd($user);
        $this->assertTrue($user->delete());
    }
}
