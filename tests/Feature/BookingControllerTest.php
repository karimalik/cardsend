<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('booking');

        $response->assertStatus(200);
    }

    public function testShow()
    {
        $response = $this->get('booking/1');

        $response->assertStatus(200);
    }
}
