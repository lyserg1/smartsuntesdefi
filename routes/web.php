<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CamaraController;
use App\Http\Controllers\RuidoController;
use App\Http\Controllers\LuzController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\UserSettingsController;
use Illuminate\Support\Facades\Auth;

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

/* Route::get('/clima','App\Http\Controllers\ClimaController@index'); */

/* Route::get('/luz','App\Http\Controllers\LuzController@index'); */

/* Route::get('/camara','App\Http\Controllers\CamaraController@index'); */

Route::get('/ruido','App\Http\Controllers\RuidoController@index');

Route::get('/estadistica','App\Http\Controllers\EstadisticaController@index');


//Ver como arreglo esta mas adelante
/* Route::get('/admin','App\Http\Controllers\PerfilController@index'); */



/* Route::get('/poste','App\Http\Controllers\PosteController@index'); */


Route::get('/contacto', function () {
    return view('contactoprueba.contacto');
});




 //ESTA RUTA ES LA DEFINITVA
 Route::resource('poste', PosteController::class)->middleware('auth');

 Route::resource('poste.clima', ClimaController::class)->middleware('auth')->names([
    'index' => 'clima.index',
    'create' => 'clima.create',
    'store' => 'clima.store',
    'show' => 'clima.show',
    'edit' => 'clima.edit',
    'update' => 'clima.update',
    'destroy' => 'clima.destroy',
 ])->shallow()->middleware('auth');

 Route::resource('luz', LuzController::class)->middleware('auth');

 Route::resource('poste.camara', CamaraController::class)->middleware('auth')->names([
    'index' => 'camara.index',
    'create' => 'camara.create',
    'store' => 'camara.store',
    'show' => 'camara.show',
    'edit' => 'camara.edit',
    'update' => 'camara.update',
    'destroy' => 'camara.destroy',
 ])->shallow()->middleware('auth');

 Route::resource('poste.ruido', RuidoController::class)->middleware('auth')->names([
    'index' => 'ruido.index',
    'create' => 'ruido.create',
    'store' => 'ruido.store',
    'show' => 'ruido.show',
    'edit' => 'ruido.edit',
    'update' => 'ruido.update',
    'destroy' => 'ruido.destroy',
 ])->shallow()->middleware('auth');

Route::resource('admin', UserSettingsController::class)->middleware('auth');




//Aqui estan las de instrucciones


Route::get('/ruidoinstruc','App\Http\Controllers\RuidoInstrucController@index')->middleware('auth');
Route::get('/climainstruc','App\Http\Controllers\ClimaInstrucController@index')->middleware('auth');
Route::get('/camarainstruc','App\Http\Controllers\CamaraInstrucController@index')->middleware('auth');

/* Route::resource('ruidoinstruc', RuidoInstrucController::class)->middleware('auth'); */
/* Route::resource('climainstruc', ClimaInstrucController::class)->middleware('auth');
Route::resource('camarainstruc', CamaraInstrucController::class)->middleware('auth'); */



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



/* Route::get('/dash/poste', function (){
    return view('poste.index');
}); */

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
