<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;


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


Route::get('/', [App\Http\Controllers\Controller::class, 'view'])->name('welcome');
Route::get('/login', function () {
    return view('login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search_book', [App\Http\Controllers\Controller::class, 'search_book'])->name('search_book');


/*Perdoruesit*/
Route::group(['middleware'=>['auth']],function(){
Route::get('/perdorues' ,[App\Http\Controllers\UserController::class, 'show'])->name('perdorues');
Route::get('/krijo_perdorues',[App\Http\Controllers\UserController::class, 'getUsers'])->name('krijo_perdorues');
Route::post('/krijo_perdoruesin',[App\Http\Controllers\UserController::class, 'krijo_perdoruesin'])->name('perdorues.krijo_perdoruesin');
Route::get('/edit/{user_id}',[App\Http\Controllers\UserController::class, 'edit'])->name('edit');
Route::post('/perditeso/{user_id}',[App\Http\Controllers\UserController::class, 'perditeso'])->name('perditeso');
Route::get('/fshi_perdorues/{user_id}',[App\Http\Controllers\UserController::class, 'fshi_perdorues'])->name('fshi_perdorues');
Route::get('/ndrysho_password/{user_id}',[App\Http\Controllers\UserController::class, 'ndrysho_password'])->name('ndrysho_password');
Route::post('/password_ndrysho/{user_id}',[App\Http\Controllers\UserController::class, 'password_ndrysho'])->name('password_ndrysho');


/*Libra*/
Route::get('/libra' ,[App\Http\Controllers\BooksController::class, 'show'])->name('libra');
Route::get('/shto_liber',[App\Http\Controllers\BooksController::class, 'createBooks'])->name('shto_liber');
Route::post('/add_books',[App\Http\Controllers\BooksController::class, 'addBooks'])->name('libra.add_books');
Route::get('/fshi_liber/{book_id}',[App\Http\Controllers\BooksController::class, 'fshi_liber'])->name('fshi_liber');
Route::get('/edit_book/{book_id}',[App\Http\Controllers\BooksController::class, 'edit_book'])->name('edit_book');
Route::post('/perditeso_liber/{book_id}',[App\Http\Controllers\BooksController::class, 'perditeso_liber'])->name('perditeso_liber');


Route::get('/file-import',[App\Http\Controllers\BooksController::class, 'importForm'])->name('file-import');
Route::post('/import',[App\Http\Controllers\BooksController::class, 'import'])->name('libra.import');
Route::get('/export',[App\Http\Controllers\BooksController::class, 'export'])->name('export');


/*Kategori*/

Route::get('/kategori' ,[App\Http\Controllers\CategoryController::class, 'show'])->name('kategori');
Route::get('/krijo_kategori',[App\Http\Controllers\CategoryController::class, 'createCategory'])->name('krijo_kategori');
Route::post('/add',[App\Http\Controllers\CategoryController::class, 'add'])->name('libra.add');

/*Search*/
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');



});