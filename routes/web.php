<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $handle = fopen(database_path('sorted.csv'), 'r');

    while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
        $csv[] = $row;
    }
    fclose($handle);

    $codes = collect(array_map(function ($values) use ($csv) {
        return array_combine($csv[0], $values);
    }, array_slice($csv, 1)))->where('eligible_code','!=','');

    return view('home',compact('codes'));
});
