<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**Dummy APIS */
Route::post('/verify-id', [ApiController::class, 'verify_id']);
Route::post('/send-email', [ApiController::class, 'sendEmail']);
Route::post('/send-sms', [ApiController::class, 'sendSms']);
Route::post('/initiate-mpesa-express', [ApiController::class, 'initiateMpesaExpress']);
