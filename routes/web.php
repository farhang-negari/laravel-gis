<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $geojson = file_get_contents(resource_path('/geojson/monuments.geojson'));

    return view('dashboard', ['geojson' => $geojson]);
})->name('dashboard');
