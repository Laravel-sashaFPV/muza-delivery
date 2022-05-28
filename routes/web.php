<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use \App\Http\Livewire\IconsComponent;
use \App\Http\Livewire\ChatComponent;
use \App\Http\Livewire\MapComponent;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', HomeComponent::class);
Route::get('/icons', IconsComponent::class);
Route::get('/chat', ChatComponent::class);
Route::get('/map', MapComponent::class);
Route::get('/chat_template', \App\Http\Livewire\Chat::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
