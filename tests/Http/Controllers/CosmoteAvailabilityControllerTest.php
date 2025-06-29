<?php

namespace Tests\Http\Controllers;

use App\Models\StreetNumber;
use App\Parsers\Cosmote\AreaHtmlParser;
use App\Parsers\Cosmote\AvailabilityParser;
use App\Services\CosmoteClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Tests\TestCase;

class CosmoteAvailabilityControllerTest extends TestCase
{
    /** @test */
    public function test_fiber_is_available()
    {
        $number = StreetNumber::find(23038);

        // both area & availability results successful
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(base_path('tests/Data/area_response_success.html'))),
            new Response(200, [], file_get_contents(base_path('tests/Data/availability_response_example.html')))
        ]);
        $this->mockCosmoteClientAvailabilityResponse($mock);

        $response = $this->post(route('cosmote.check-availability'), [
            'number' => $number->id
        ]);


        $response->assertStatus(200);

        $this->assertEquals('success', $response->json('status'));
        $this->assertTrue($response->json('fiber'));

        $number->refresh();
        $this->assertEquals(true, $number->cosmote_200_ftth);
    }

    /** @test */
    public function test_fiber_is_not_available()
    {
        $number = StreetNumber::find(23038);

        // both area & availability results successful
        $mock = new MockHandler([
            new Response(200, [], file_get_contents(base_path('tests/Data/area_response_success.html'))),
            new Response(200, [], '')
        ]);
        $this->mockCosmoteClientAvailabilityResponse($mock);

        $response = $this->post(route('cosmote.check-availability'), [
            'number' => $number->id
        ]);

        $response->assertStatus(200);

        $this->assertEquals('success', $response->json('status'));
        $this->assertFalse($response->json('fiber'));

        $number->refresh();
        $this->assertEquals(0, $number->cosmote_200_ftth);
    }

    /** @test */
    public function it_returns_an_error_when_no_areas_are_found()
    {
        $number = StreetNumber::find(23038);

        // both area & availability results successful
        $mock = new MockHandler([
            new Response(200, [], '')
        ]);
        $this->mockCosmoteClientAvailabilityResponse($mock);

        $response = $this->post(route('cosmote.check-availability'), [
            'number' => $number->id
        ]);

        $response->assertStatus(200);

        $this->assertEquals('error', $response->json('status'));
        $this->assertEquals('No areas found', $response->json('message'));
        $number->refresh();
        $this->assertEquals(0, $number->cosmote_200_ftth);
    }

    /**
     * Mocks responses of Cosmote Client
     */
    private function mockCosmoteClientAvailabilityResponse(MockHandler $mockHandler)
    {
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new \GuzzleHttp\Client(['handler' => $handlerStack]);

        $cosmoteClient = new CosmoteClient(
            $client,
            resolve(AreaHtmlParser::class),
            resolve(AvailabilityParser::class)
        );

        $this->app->bind(CosmoteClient::class, function () use ($cosmoteClient) {
            return $cosmoteClient;
        });

        return $cosmoteClient;
    }
}
