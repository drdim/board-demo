<?php

//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAuthRedirect()
    {
        $this->call('GET','/');
        $this->assertRedirectedToAction('Auth\AuthController@getLogin');
    }
}
