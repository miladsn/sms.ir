<?php

use Illuminate\Support\Facades\Route;
use Damoongasht\Smsir\Controllers\SmsirlaravelController;

Route::name('sms-admin.')->group(function () {
	Route::get(config('smsirlaravel.route'), [SmsirlaravelController::class, 'index'])->name('index');
	Route::get('sms-admin/{smsirlaravelLog}/delete', [SmsirlaravelController::class, 'destroy'])->name('destroy');
});
