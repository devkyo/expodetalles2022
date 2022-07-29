<?php

use Illuminate\Support\Facades\Route;

use App\Models\Visitante;
use App\Models\expo2022;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


use App\Http\Controllers\VisitanteController;


use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;

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


route::get('/visitante/registro', [VisitanteController::class,'create'])->name('visitante.create');

route::get('/visitante/success/{visitante}', [VisitanteController::class,'success'])->name('success');

// Route::get('/visitante', function () {
    
//     $visitante = expo2022::where('visitante_id',3)->first();
//     return $visitante->visitante;
// });


route::get('/asistencia/{token}', [VisitanteController::class,'asistencia'])->name('asistencia')->middleware('auth');



Route::post('/visitante/store', [VisitanteController::class,'store']);


Route::get('/print', function(){


   
//

});



Route::get('/email', [VisitanteController::class,'visitanteEmail']);


Route::get('/qr', function () {
    

    return QrCode::format('svg')->size(300)->eyeColor(0, 186, 152, 88, 0, 180, 183)->style('square')->generate('A basic example of QR dsdsdcode!');
    // return QrCode::format('png')->merge('/public/images/expo2022.png', .3)->generate('A basic example of QR dsdsdcode!');

});

Route::get('/download/visitantes',[VisitanteController::class,'visitanteExport'])->name('downloadVisitante');




// Auth::routes();

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/registroexpo', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');