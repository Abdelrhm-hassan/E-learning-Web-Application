<?php

use Illuminate\Support\Facades\Route;

// namespace App\Http\Controllers\Front;

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
// Admin Route

Route::namespace('Admin')->prefix('dashbord')->group(function(){
Route::get('/login','AuthController@login')->name('Admin.login');
Route::post('/','AuthController@dologin')->name('Admin.dologin');
Route::get('/register','AuthController@register')->name('Admin.auth.register');


Route::middleware('AdminAuth:admin')->group(function(){

Route::get('/logout','AuthController@logout')->name('Admin.logout');
Route::get('/','HomeController@index')->name('Admin.home');
// cats Routes

Route::get('/cats','cats\catsController@index')->name('Admin.cats.index');
Route::get('/cats/edit/{id}','cats\catsController@edit')->name('Admin.cats.edit');
Route::get('/cats/create','cats\catsController@create')->name('Admin.cats.create');
Route::post('/cats/store','cats\catsController@store')->name('Admin.cats.store');
Route::post('/cats/update','cats\catsController@update')->name('Admin.cats.update');
Route::post('/cats/dodelete','cats\catsController@dodelete')->name('Admin.cats.dodelete');
Route::get('/cats/delete/{id}','cats\catsController@delete')->name('Admin.cats.delete');

// teatcher Route

Route::get('/teatcher','teatcherController@index')->name('Admin.teatcher.index');
Route::get('/teatcher/edit/{id}','teatcherController@edit')->name('Admin.teatcher.edit');
Route::get('/teatcher/create','teatcherController@create')->name('Admin.teatcher.create');
Route::post('/teatcher/store','teatcherController@store')->name('Admin.teatcher.store');
Route::post('/teatcher/update','teatcherController@update')->name('Admin.teatcher.update');
Route::post('/teatcher/dodelete','teatcherController@dodelete')->name('Admin.teatcher.dodelete');
Route::get('/teatcher/delete/{id}','teatcherController@delete')->name('Admin.teatcher.delete');

// course  Route
Route::get('/course','courseController@index')->name('Admin.course.index');
Route::get('/course/edit/{id}','courseController@edit')->name('Admin.course.edit');
Route::get('/course/create','courseController@create')->name('Admin.course.create');
Route::post('/course/store','courseController@store')->name('Admin.course.store');
Route::post('/course/update','courseController@update')->name('Admin.course.update');
Route::post('/course/dodelete','courseController@dodelete')->name('Admin.course.dodelete');
Route::get('/course/delete/{id}','courseController@delete')->name('Admin.course.delete');

   

// student  Route
Route::get('/student','studentController@index')->name('Admin.student.index');
Route::get('/student/edit/{id}','studentController@edit')->name('Admin.student.edit');
Route::get('/student/create','studentController@create')->name('Admin.student.create');
Route::post('/student/store','studentController@store')->name('Admin.student.store');
Route::post('/student/update','studentController@update')->name('Admin.student.update');
Route::post('/student/dodelete','studentController@dodelete')->name('Admin.student.dodelete');
Route::get('/student/delete/{id}','studentController@delete')->name('Admin.student.delete');
Route::get('/student/show/{id}','studentController@show')->name('Admin.student.show');

    
});


});

// Front Route
Route::get('/','Front\HomeControler@index')->name('Front.home');
Route::get('/course/cat/{id}','Front\CourseController@cat')->name('Front.cat');
Route::get('/course/cat/{id}/course/{c_id}','Front\CourseController@show')->name('Front.show');
Route::get('/contact','Front\HomeControler@contact')->name('Front.contact');
Route::get('/about','Front\HomeControler@about')->name('Front.about');
Route::put('/message/newsletters','Front\MessageController@newsletters')->name('Front.message.newsletters');
Route::put('/message/messages','Front\MessageController@messages')->name('Front.message.messages');
Route::put('/message/enroll','Front\MessageController@enroll')->name('Front.message.enroll');
