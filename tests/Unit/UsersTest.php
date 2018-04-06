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

    /* Unit tests performed for midterm
    public function testInsertUser()
    {
        $user = new User();
        //$user->name ='Jyostna';
        $user->email ='ju36@njit.edu';
        $user->password='12345';
        $this->assertTrue($user->save());
    }

    /*Commenting this test method as it became obsolete after removing username
     * public function testUpdateUserName()
    {
       $user = User::all()->last();
       //dd($user);
        //$user->name="Steve Smith"; To assign a name and update it using update()
        //$this->assertTrue($user->update());
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
    public function testUserCount()
    {
        $users = User::all();
        $usersCount = count($users);
        //$this->assertEquals(50,$usersCount);
        $this->assertInternalType("int",$usersCount);
    }*/

    public function testSave()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());
    }
    public function testSample()
    {
        $this->assertTrue('true');
    }
    public function testSample1()
    {
        $this->assertTrue('true');
    }

}
