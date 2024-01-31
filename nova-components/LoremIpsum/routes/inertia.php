<?php

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Requests\NovaRequest;

/*
|--------------------------------------------------------------------------
| Tool Routes
|--------------------------------------------------------------------------
|
| Here is where you may register Inertia routes for your tool. These are
| loaded by the ServiceProvider of the tool. The routes are protected
| by your tool's "Authorize" middleware by default. Now - go build!
|
*/

Route::get('/', function (\Faker\Generator $faker, NovaRequest $request) {
    return inertia('LoremIpsum', [
        'text' => $faker->paragraph(50),
    ]);
});

Route::get('/dolor-sit', function (\Faker\Generator $faker, NovaRequest $request) {
    return inertia('DolorSit', [
        'text' => $faker->paragraph(100),
    ]);
});
