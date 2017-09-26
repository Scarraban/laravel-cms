<?php

use Carbon\Carbon;
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

/*
|--------------------------------------------------------------------------
| CRUD Routes
|--------------------------------------------------------------------------
|
*/

Route::resource('/posts', 'PostsController');

Route::get('/dates', function() {

  echo Carbon::now()->addDays(10)->diffForHumans();
  echo "<br/>";
  echo Carbon::now()->subMonths(1)->diffForHumans();

});

use App\User;

Route::get('/getname', function() {
  $user = User::find(1);
  echo $user->name;
});
