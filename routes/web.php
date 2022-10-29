<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CamaraController;
use App\Http\Controllers\RuidoController;
use App\Http\Controllers\LuzController;
use App\Http\Controllers\EstadisticaController;

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

Route::get('/luz','App\Http\Controllers\LuzController@index');

Route::get('/camara','App\Http\Controllers\CamaraController@index');

Route::get('/ruido','App\Http\Controllers\RuidoController@index');

Route::get('/estadistica','App\Http\Controllers\EstadisticaController@index');

Route::get('/admin','App\Http\Controllers\PerfilController@index');

/* Route::get('/clima','App\Http\Controllers\ClimaController@mostrarclima'); */

//VER comoo arreglo lo de la ruta con el video de informaticaDP

Route::get('/contacto', function () {
    return view('contactoprueba.contacto');
});



/* Route::get('/contactanos', 'App\Http\Controllers\ContactoController@index'); */

/* Route::get('/layouts/contacto', [ContactoController::class, 'index']); */


//ESTAS FUERON otras rutas con las que intente, las de arriba estan ok
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

 //Esta es la otra ruta que vi, la que parece que es la de actual laravel 8, pero estoy confundido.
/**  Route::middleware([
  *  'auth:sanctum',
   * config('jetstream.auth_session'),
   * 'verified'
*])->group(function () {

 *   Route::get('profile', function (){
  *      return view('admin.profile');
  *  })->name('profile');
*}); */
