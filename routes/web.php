<?php

use Illuminate\Support\Facades\Route;

use App\Models\Visitante;
use App\Models\expo2022;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


use App\Http\Controllers\VisitanteController;


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
    // return redirect('https://expodetallesperu.pe');

});


route::get('/visitante/create', [VisitanteController::class,'create'])->name('visitante.create');

route::get('/visitante/success/{visitante}', [VisitanteController::class,'success'])->name('success');

// Route::get('/visitante', function () {
    
//     $visitante = expo2022::where('visitante_id',3)->first();
//     return $visitante->visitante;
// });


route::get('/asistencia/{token}', [VisitanteController::class,'asistencia'])->name('asistencia')->middleware('auth');



Route::post('/visitante/store', [VisitanteController::class,'store']);


// Route::get('/visitante/store', function(){
//     return 'adsadasdstore';
// });



Route::get('/email', [VisitanteController::class,'visitanteEmail']);


Route::get('/qr', function () {
    

    return QrCode::format('svg')->size(300)->generate('A basic example of QR dsdsdcode!');

});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
