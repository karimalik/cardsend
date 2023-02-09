<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWelcomeIndex()
    {
        $response = $this->get('welcome.index');

        $response->assertStatus(200);
    }
}
