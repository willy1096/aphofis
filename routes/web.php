<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AppController;

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

Route::get('/', [AppController::class,'redire'])->name('app.redire');

Route::prefix('/affare_test/dev/')->group(function () {
    Route::get('/', [AppController::class,'index'])->name('app.index');
    Route::get('inicio', [AppController::class,'index'])->name('app.nosotros');
    Route::get('contacto', [AppController::class,'contacto'])->name('app.contacto');
    Route::get('servicios', [AppController::class,'servicios'])->name('app.servicios');

    Route::get('galeria', [AppController::class,'galeria'])->name('app.galeria');
    Route::get('correo', [AppController::class,'correo'])->name('app.correo');
    Route::post('/send/mail', [AppController::class,'mail__send'])->name('app.mail.send');
    Route::post('/send/mail/servicios', [AppController::class,'mail__sendServicios'])->name('app.mail.servicios');
});