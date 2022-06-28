<?php

use App\Events\NotificationEvent;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/broadcast', function () {
    $message = 'Mesaj Yazıldı. Bu event ile geldi.'.rand(100,999);
    event( new NotificationEvent( $message,'sami@sami.com' ) );
    echo 'Giden Mesaj: '. $message;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
