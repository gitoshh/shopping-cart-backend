<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WelcomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Tests the landing page content
     */
    public function test_the_landing_page_shows_welcome_page()
    {
        $response = $this->get('/');
        $this->assertStringContainsString('Shopping app', $response->content());
        $this->assertStringContainsString('API', $response->content());
    }
}
