<?php

namespace App\Http\Controllers;

use App\Models\PostalCode;
use App\Models\StreetNumber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $numbers = [];

        if ($request->postal_code) {
            $postal = $request->postal_code;
            $numbers = StreetNumber::with('street.postalCode')
                ->whereHas('street.postalCode', function ($q) use ($postal) {
                    $q->where('code', $postal);
                })->get()
                ->sortBy([
                    fn ($a, $b) => strnatcmp($a->street->name, $b->street->name),
                    fn ($a, $b) => strnatcmp($a->number, $b->number),
                ])
                ->values();
        }

        $postalCodes = PostalCode::athens()
            ->orderBy('ftth_count', 'desc')
            ->get();

        return view('home', compact('numbers', 'postalCodes'));
    }
}
