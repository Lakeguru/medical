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



Route::group(['middleware' => ['guest']], function () {
    Route::get('/','ViewsController@index')->name('index');
    Route::get('service','ViewsController@service')->name('service');
    Route::get('department','ViewsController@department')->name('department');
    Route::get('doctor','ViewsController@doctors')->name('doctor');
    Route::get('department','ViewsController@department')->name('department');
    Route::get('contact','ViewsController@contact')->name('contact');
    Route::post('contact','ViewsController@getcontact')->name('getcontact');
    Route::get('about','ViewsController@about')->name('about');
    Route::get('faqs','ViewsController@faqs')->name('faqs');
    Route::get('galary','ViewsController@galary')->name('galary');
    Route::get('pricelist','ViewsController@pricelist')->name('pricelist');
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('blogdetails','BlogController@blogdetails')->name('blogdetails');
    Route::get('post','PostController@createpost');
    Route::post('post','PostController@postcreate');
//Route::post('postdetails','BlogController@postdetails')->name('postdetails')
    Route::post('comment','BlogController@comment')->name('comment');
    Route::get('login','SessionController@login')->name('login');
    Route::post('login','SessionController@postlogin')->name('signin');
    Route::get('signup','RegistrationController@signup')->name('register');
    Route::post('signup','RegistrationController@postsignup')->name('signup');
    Route::get('dashboard','DashboardController@get')->name('dashboard');
    
    
});


Route::get('add_doctor','DoctorsController@index')->name('add_doctor');
Route::post('add_doctor','DoctorsController@create')->name('postadd_doctor');

Route::group(['prefix'=>'dashboard','middleware'=>'auth'], function (){
        
        // Route::resource('doctor', 'DoctorController');
        
        Route::group(['prefix' => 'doctor'], function() {

        });
        
        Route::get('logout','SessionController@destroy')->name('logout');
        
    
});


// Route::get('/','AdminController@check');

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('login','AuthAdAdminAuthmin\LoginController@showloginForm')->name('login');
//     Route::post('login','AdminAuth\LoginController@login')->name('postlogin');
//     Route::get('/','AdminController@index')->name('admin.home');
//     Route::get('/logout','AdminAuth\LoginController@logout')->name('admin.logout');
//     Route::get('/password/reset','  AdminAuth\ForgetPasswordController@showlinkrequestform')->name('admin.password.request');
//     Route::post('/password/email','  AdminAuth\ForgetPasswordController@sendrequestemail')->name('admin.password.email');
//     Route::get('/password/reset{token}','  AdminAuth\ResetPasswordController@showresetform')->name('admin.password.reset');
//     Route::post('/password/reset','  AdminAuth\ForgetPasswordController@reset');
// });

// Auth::routes();
// Route::get('/user/logout','Auth\LoginController@logoutUser')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
