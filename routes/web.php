<?php

use App\Models\Monument;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $geojson = [
        'type' => 'FeatureCollection',
        'features' => [],
    ];

    Monument::selectRaw('id, name, image, ST_AsGeoJSON(geom) as geom')
        ->get()
        ->each(function ($monument) use (&$geojson) {
            $geojson['features'][] = [
                'type' => 'Feature',
                'properties' => [
                    'name' => $monument->name,
                    'image' => $monument->image,
                ],
                'geometry' => json_decode($monument->geom, true),
            ];
        });

    return view('dashboard', ['geojson' => json_encode($geojson)]);
})->name('dashboard');
