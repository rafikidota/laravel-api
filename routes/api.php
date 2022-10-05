<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Route::middleware('auth:api')->get('/user', function (Request $request) {
Route::middleware('auth:api')->group(function () {
    // Route::get('/products','ProductsController@index')->name('products');
    Route::get('/products', [ProductsController::class, 'index']);
    Route::get('/mail/basic', [MailController::class, 'basic']);
    Route::get('/mail/html', [MailController::class, 'html']);
    Route::get('/mail/template', [MailController::class, 'template']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // return $request->user();
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('welcome', function () {
    return response()->json(['data' => 'Welcome to Laravel', 'code' => 200]);
});

Route::get('crypt', function () {
    $md5 = md5('laravel');
    $hash_make = Hash::make('laravel');
    $bcrypt = bcrypt('laravel');
    $laravel = 'laravel';
    $encrypted = Crypt::encrypt($laravel);
    $decrypted = Crypt::decrypt($encrypted);
    $equals = false;
    if ($laravel === $decrypted) {
        $equals = true;
    }
    return response()->json([
        'md5' => $md5,
        'hash_make' => $hash_make,
        'bcrypt' => $bcrypt,
        'laravel' => $laravel,
        'encrypt_laravel' => $encrypted,
        'decrypt_laravel' => $decrypted,
        'equals' => $equals,
        'code' => 200
    ]);
});
