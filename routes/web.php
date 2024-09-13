<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'homepage']);


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/create_post', [HomeController::class, 'create_post'])->name('user.create_post');

Route::post('/store_post', [HomeController::class, 'store_post'])->name('user.store_post');

Route::get('/my_posts', [HomeController::class, 'my_posts'])->name('user.my_posts');



Route::get('/post_details/{id}', [HomeController::class, 'post_details'])->name('user.post_details');


Route::post('/posts/{id}/comments', [HomeController::class, 'addComment'])->name('post.add_comment');




Route::get('/post_page', [AdminController::class, 'post_page']);

Route::post('/add_page', [AdminController::class, 'add_post'])->name('admin.add_post');

Route::get('/show_posts', [AdminController::class, 'show_posts'])->name('admin.post_index');

Route::delete('/delete_post/{id}', [AdminController::class, 'delete_post'])->name('admin.delete_post');

Route::get('/edit_post/{id}', [AdminController::class, 'edit_post'])->name('admin.edit_post');

Route::post('/update_post/{id}', [AdminController::class, 'update_post'])->name('admin.update_post');
