<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and are assigned to the "api" middleware group.
|
*/

// Uncomment the following line if you want to require authentication (auth:sanctum) for this route
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Define an API route for saving a form
Route::post('/simpan_formulir', [ApiController::class, 'menyimpan'])->name('menyimpan');
