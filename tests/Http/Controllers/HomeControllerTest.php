<?php

namespace Tests\Http\Controllers;

use App\Models\PostalCode;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{

    /** @test */
    public function it_shows_the_home_view(){

        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }

    /** @test */
    public function it_shows_results_for_a_specific_postal_code(){

        $postalCode = PostalCode::where('name','ΣΕΠΟΛΙΑ')->first();


        $response = $this->get(route('home',['postal_code' => $postalCode->code]));

        $response->assertStatus(200)
            ->assertSee('ΣΕΠΟΛΙΑ');
    }
}
