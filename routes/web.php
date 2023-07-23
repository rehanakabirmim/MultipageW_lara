<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController;
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

//for frontend
Route::controller(FrontendController::class)->group(function(){

route::get('/','index')->name('homepage');
route::get('/about','about')->name('aboutpage');
route::get('/menu','menu')->name('menupage');
route::get('/news','news')->name('newspage');
route::get('/news-detail','newsDeatail')->name('news-detailpage');
route::get('/contact','contact')->name('contactpage');


});
//for dashbaord
Route::controller(BackendController::class)->group(function(){
    route::get('/dashboard','index')->name('dashboard');

});

//for product
Route::controller(ProductController::class)->group(function(){
    route::get('/product','index')->name('product.index');
    route::post('/product/add','store')->name('product.add');
    route::get('/product/manage','show')->name('product.manage');
    route::get('/product/delete/{id}','destroy')->name('product.destroy');
    route::get('/product/atoi/{id}','atoi')->name('product.atoi');
    route::get('/product/itoa/{id}','itoa')->name('product.itoa');
    route::get('/product/edit/{id}','edit')->name('product.edit');
    route::post('/product/update/{id}','update')->name('product.update');
});