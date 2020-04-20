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

Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
})->name('terms');

Route::get('/archive', function () {
    return view('pages.archive');
});

Route::get('/anti-spam-policy', function () {
    return view('pages.anti-spam-policy');
})->name('anti-spam-policy');

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');


// Route::get('privacy-policy', function () {
//     return view('pages.index');
// })->name('privacy-policy');

Route::get('term-of-use', function () {
    return view('pages.blog-details');
})->name('term-of-use');

Route::get('visitor','PostController@getIp' );


Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
//  Route::get('/home', 'HomeController@recieve');

//  Admin routes
Route::get('/admin-zone', 'AdminController@index')->name('admin.index');
Route::get('/admin-zone/posts', 'AdminController@posts')->name('admin.posts');

Route::resource('admin/post', 'PostController');
Route::resource('admin/tag', 'TagController');
Route::resource('admin/category', 'CategoryController');
Route::resource('/comments','CommentController');
Route::post('replies', 'ReplyController@store')->name('replies.store');
// Route::resource('/replies','ReplyController');
// Route::post('admin/replies/ajaxDelete', 'RepliesController@ajaxDelete');



Route::get('/post/{id}','PostController@postag')->name('postag');