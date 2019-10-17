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

    use Illuminate\Support\Facades\Auth;

    Route::get('/', function () {
//    return view('welcome');

//     if (Auth::check()){
//      return 'the users is login';
//     }
            $username = 'ola';
            $password = 'olatunbosun';
        if(Auth::attempt(['username'=>$username, 'password'=>$password])){
            return redirect()->intended();
        }

        Auth::logout();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
