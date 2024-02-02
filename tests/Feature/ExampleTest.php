<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /** @test */
    public function it_shows_the_home_view()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }
}
