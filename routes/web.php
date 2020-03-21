<?php

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

Route::get('/pages/first', function () {
    return view('pages.index');
});

Route::get('/dmca', function () {
    return view('pages.dmca');
})->name('dmca');

Route::get('/archive', function () {
    return view('pages.archive');
});

Route::get('privacy-policy', function () {
    return view('pages.index');
})->name('privacy-policy');

Route::get('term-of-use', function () {
    return view('pages.blog-details');
})->name('term-of-use');




Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
// Route::get('/home', 'HomeController@recieve');

//  Admin routes
Route::get('/admin-zone', 'AdminController@index')->name('admin.index');
Route::get('/admin-zone/posts', 'AdminController@posts')->name('admin.posts');

Route::resource('admin/post', 'PostController');
Route::resource('admin/tag', 'TagController');
Route::resource('admin/category', 'CategoryController');



Route::get('/post/{id}','PostController@postag')->name('postag');