<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
Use App\Profile;

class ProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testSave()
    {
       $user = factory(\App\User::class)->make();
       $user->save();
       //dd($user);
       $profile = factory(\App\Profile::class)->make();
       $profile->user()->associate($user);
       $this->assertTrue($profile->save());

    }
}
