<?php

use Illuminate\Support\Facades\Route;
use App\ Http\controllers\Homecontroller;
use App\ Http\controllers\Admincontroller;

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
Route::get('/',[Homecontroller::class,('index')]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[Homecontroller::class,('redirect')]);
route::get('/aboutus',[Homecontroller::class,('aboutus')]);
Route::get('/destination',[Homecontroller::class,('destination')]);
Route::get('/view_category',[Admincontroller::class,('view_category')]);
Route::post('/category ',[Admincontroller::class,('category')]);
Route::get('/delete_category/{id} ',[Admincontroller::class,('delete_category')]);
Route::get('/view_destination',[Admincontroller::class,('view_destination')]);
Route::post('/add_destination',[Admincontroller::class,('add_destination')]);
Route::get('/show_destination',[Admincontroller::class,('show_destination')]);
Route::get('/delete_destination/{id}',[Admincontroller::class,('delete_destination')]);
Route::get('/update_destination/{id}',[Admincontroller::class,('update_destination')]);
Route::post('/update_destination_confirm/{id}',[Admincontroller::class,('update_destination_confirm')]);
Route::get('/packages',[Homecontroller::class,('packages')]);
Route::get('/detail/{id}',[Homecontroller::class,('detail')]);
Route::get('/book/{id}',[Homecontroller::class,('book')]);
Route::get('/add_book/{id}',[Homecontroller::class,('add_book')]);
Route::get('/show_book',[Homecontroller::class,('show_book')]);
Route::get('/delete/{id}',[Homecontroller::class,('delete')]);
Route::get('/cash_delivery',[Homecontroller::class,('cash_delivery')]);
Route::get('/booked',[Admincontroller::class,('booked')]);
Route::get('/paid_status/{id}',[Admincontroller::class,('paid_status')]);
Route::get('/search',[Admincontroller::class,('search')]);
Route::get('/destinations',[Admincontroller::class,('destinations')]);
Route::post('/add_destinations',[Admincontroller::class,('add_destinations')]);
Route::get('/show_destinations',[Admincontroller::class,('show_destinations')]);
Route::get('/update_destinations/{id}',[Admincontroller::class,('update_destinations')]);
Route::post('/updatedestinations_confirm/{id}',[Admincontroller::class,('updatedestinations_confirm')]);
Route::get('/delete_destinations/{id}',[admincontroller::class,('delete_destinations')]);
