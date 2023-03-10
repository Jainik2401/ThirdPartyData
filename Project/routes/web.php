<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ContactusController;

/*
|--------------------------------------------------------;------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/contactus', function () {
    return view('contactus');
});
Route::post('insertcontactus', [ContactusController::class, 'index']);

// $res = Http::get('http://127.0.0.1:8000/api/contact');
// print_r($res->body());


// $res = Http::post('http://127.0.0.1:8000/api/contact', [
//     'name' => 'sid',
//     'email' => 's@gmail.com',
//     'message' => 'heeeeeeeeeee'
// ]);