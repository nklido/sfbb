<?php

namespace Tests\Feature;

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
