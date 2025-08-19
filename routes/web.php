<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf/view', [PdfController::class, 'view']);
Route::get('/pdf/download', [PdfController::class, 'download']);

Route::get('generateFL309', [PdfController::class, 'generateFL309']);