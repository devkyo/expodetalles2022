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

});


route::get('/visitante/create', [VisitanteController::class,'create'])->name('visitante.create');

route::get('/visitante/success', [VisitanteController::class,'success'])->name('visitante.success');

// Route::get('/visitante', function () {
    
//     $visitante = expo2022::where('visitante_id',3)->first();
//     return $visitante->visitante;
// });


// Route::post('/visitante/store',[VisitanteController::class,'store'])->name('visitante.store');

Route::post('/visitante/store', [VisitanteController::class,'store']);





Route::get('/qr', function () {
    

    return QrCode::format('svg')->size(300)->generate('A basic example of QR dsdsdcode!');

});





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
