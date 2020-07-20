 <?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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
// pages
Route::get('/', 'PagesController@index');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/about', 'PagesController@about');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/contact', 'PagesController@contact');
Route::get('/services', 'PagesController@services');

// categories
Route::resource('/categories', 'CategoryController');


// this are the authentication route
Auth::routes();
// this is the home controller
Route::get('/home', 'HomeController@index')->name('home');

