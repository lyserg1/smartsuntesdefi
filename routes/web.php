<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CamaraController;
use App\Http\Controllers\RuidoController;
use App\Http\Controllers\LuzController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\PosteController;

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




//Asi es con el controller.
Route::get('/dash','App\Http\Controllers\DashboardController@index');

Route::get('/clima','App\Http\Controllers\ClimaController@index');

Route::get('/luz','App\Http\Controllers\LuzController@index');

Route::get('/camara','App\Http\Controllers\CamaraController@index');

Route::get('/ruido','App\Http\Controllers\RuidoController@index');

Route::get('/estadistica','App\Http\Controllers\EstadisticaController@index');


//Ver como arreglo esta mas adelante
Route::get('/admin','App\Http\Controllers\PerfilController@index');



/* Route::get('/poste','App\Http\Controllers\PosteController@index'); */


Route::get('/contacto', function () {
    return view('contactoprueba.contacto');
});


 //ESTA RUTA ES LA DEFINITVA
 Route::resource('poste', PosteController::class);






//Es una forma de acceder el dashboard yo usare los controller. - analizar
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



Route::get('/dash/poste', function (){
    return view('poste.index');
});

/* Route::get('/dash/poste/create', function () {
    return view('poste.create');
});
 */








/* Route::get('/poste',[App\Http\Controllers\PosteController::class, 'create']); */

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
