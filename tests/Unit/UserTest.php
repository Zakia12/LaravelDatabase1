<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class Example1Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);

    }

    public function testBasicTest2()
    {
        $user = User::find(1);
        $this->assertInternalType('int', $user->id);
    }
}