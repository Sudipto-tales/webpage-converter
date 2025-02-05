<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ScreenshotController;

Route::get('/capture-image', [ScreenshotController::class, 'captureImage']);
Route::get('/capture-pdf', [ScreenshotController::class, 'capturePdf']);

