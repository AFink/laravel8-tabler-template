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

Route::get('/email/verify', [App\Http\Controllers\UserVerificationController::class, 'notice'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\UserVerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/verification-notification', [App\Http\Controllers\UserVerificationController::class, 'send'])->name('verification.send');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/imprint', [App\Http\Controllers\MarkdownController::class, 'showImprint'])->name('imprint.show');
Route::get('/terms', [App\Http\Controllers\MarkdownController::class, 'showTerms'])->name('terms.show');
Route::get('/privacy', [App\Http\Controllers\MarkdownController::class, 'showPrivacy'])->name('policy.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
