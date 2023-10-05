<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send',function(){
    $data = [
        'name' => 'KakaNov',
        'body' => 'Testing Kirim Email di Santri Koding'
    ];
   
    Mail::to(['rizkynovando@gmail.com'])->send(new SendEmail($data));
   
    dd("Email Berhasil dikirim.");
});
