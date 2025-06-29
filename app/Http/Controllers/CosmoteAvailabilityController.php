<?php

namespace App\Http\Controllers;

use App\Models\StreetNumber;
use App\Services\Cosmote\AvailabilityService;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class CosmoteAvailabilityController extends Controller
{
    public function __construct()
    {
        libxml_use_internal_errors(true);
    }

    public function __invoke(Request $request, AvailabilityService $availabilityService)
    {
        $number = StreetNumber::with('street.postalCode')
            ->findOrFail($request->number);

        try {
            $result = $availabilityService->checkAvailability($number);
            $number->cosmote_200_ftth = $result;
            $number->save();

            return response()->json([
                'status' => 'success',
                'fiber' => $result,
            ]);
        } catch (GuzzleException|Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
