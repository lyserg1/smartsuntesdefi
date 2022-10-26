<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\PerfilController;



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
    return view('home');
});


//Por el momento esta asi, despues la arreglare con Controller.
/* Route::get('/dash/clima', function(){
    return view('climas.index');
});
 */


//Asi es con el controller.
Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::get('/clima','App\Http\Controllers\ClimaController@index');

Route::get('/admin','App\Http\Controllers\PerfilController@index');

/* Route::get('/clima',[ClimaController::class, 'index']); */

/* Route::get('/profile','App\Http\Controllers\PerfilController@show');
 */
/* Route::get('/admin', [PerfilController::class, 'profile']); */

/* Route::get('/admin',[ProfileController::class, 'profile']);
 */

//Es una forma de acceder el dashboard yo usare los controller.
/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
 */
