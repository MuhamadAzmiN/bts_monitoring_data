<?php

use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SniffResultController;
use App\Http\Controllers\ConfigController;

use App\Http\Controllers\BtsController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SmsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('sniff_result', 'sniff_result')
//     ->middleware(['auth', 'verified'])
//     ->name('sniff_result');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('sniff_result', [SniffResultController::class, 'index'])->name('sniff_result');
    Route::get('config', [ConfigController::class, 'index'])->name('config');
    Route::post('config', [ConfigController::class, 'store'])->name('config');
});
    
Route::middleware(['auth'])->group(function () {
    Route::get('settings/profile', [Settings\ProfileController::class, 'edit'])->name('settings.profile.edit');
    Route::put('settings/profile', [Settings\ProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('settings/profile', [Settings\ProfileController::class, 'destroy'])->name('settings.profile.destroy');
    Route::get('settings/password', [Settings\PasswordController::class, 'edit'])->name('settings.password.edit');
    Route::put('settings/password', [Settings\PasswordController::class, 'update'])->name('settings.password.update');
    Route::get('settings/appearance', [Settings\AppearanceController::class, 'edit'])->name('settings.appearance.edit');

    Route::resource('bts', BtsController::class);
    Route::resource('devices', DeviceController::class);
    Route::resource('sms', SmsController::class);
});

require __DIR__.'/auth.php';
