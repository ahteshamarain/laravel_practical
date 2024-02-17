<?php
use App\Http\Controllers\studentcontroller;
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

Route::get('/', [studentcontroller::class , 'form'])->name('home');
Route::post('/', [studentcontroller::class , 'formdata']);
Route::get('/userdata', [studentcontroller::class , 'user_view'])->name('viewuser');
Route::get('/del_user/{id}', [studentcontroller::class , 'del_user' ]);




