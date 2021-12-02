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
Route::get('/affere_test/dev/', [AppController::class,'index'])->name('app.index');
Route::get('/affere_test/dev/inicio', [AppController::class,'index'])->name('app.nosotros');
Route::get('/affere_test/dev/contacto', [AppController::class,'contacto'])->name('app.contacto');
Route::get('/affere_test/dev/servicios', [AppController::class,'servicios'])->name('app.servicios');

Route::get('/affere_test/dev/galeria', [AppController::class,'galeria'])->name('app.galeria');
Route::get('/affere_test/dev/correo', [AppController::class,'correo'])->name('app.correo');
Route::post('/send/mail', [AppController::class,'mail__send'])->name('app.mail.send');
