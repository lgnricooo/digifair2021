<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::post('/store', [App\Http\Controllers\RegistrationController::class, 'store'])->name('create.registered');

Route::group(['prefix'=>'ADMIN', 'middleware'=>['isAdmin','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [App\Http\Controllers\RegistrationController::class, 'adminView'])->name('admin.dashboard');
    Route::get('opening', [App\Http\Controllers\RegistrationController::class, 'opening'])->name('admin.opening');
    Route::get('kamustahan', [App\Http\Controllers\RegistrationController::class, 'kamustahan'])->name('admin.kamustahan');
    Route::get('handout', [App\Http\Controllers\RegistrationController::class, 'handout'])->name('admin.handout');
    Route::get('slidejhs', [App\Http\Controllers\RegistrationController::class, 'slidejhs'])->name('admin.slidejhs');
    Route::get('viddoc', [App\Http\Controllers\RegistrationController::class, 'viddoc'])->name('admin.viddoc');
    Route::get('plenS', [App\Http\Controllers\RegistrationController::class, 'plenS'])->name('admin.plenS');
    Route::get('plenT', [App\Http\Controllers\RegistrationController::class, 'plenT'])->name('admin.plenT');
    Route::get('demo', [App\Http\Controllers\RegistrationController::class, 'demo'])->name('admin.demo');
    Route::get('lesson', [App\Http\Controllers\RegistrationController::class, 'lesson'])->name('admin.lesson');
    Route::get('google', [App\Http\Controllers\RegistrationController::class, 'google'])->name('admin.google');
    Route::get('sdo', [App\Http\Controllers\RegistrationController::class, 'sdo'])->name('admin.sdo');
    Route::get('national', [App\Http\Controllers\RegistrationController::class, 'national'])->name('admin.national');
    Route::get('digital', [App\Http\Controllers\RegistrationController::class, 'digital'])->name('admin.digital');
    Route::get('closing', [App\Http\Controllers\RegistrationController::class, 'closing'])->name('admin.closing');
    Route::get('/registration/{id}/edit', [App\Http\Controllers\RegistrationController::class, 'editRegistration'])->name('admin.edit');
    Route::get('kamustahan/attendance', [App\Http\Controllers\RegistrationController::class, 'kamustahanAttendance'])->name('admin.kamustahanAttendance');
    Route::get('/registration/store', [App\Http\Controllers\RegistrationController::class, 'updateRegistration'])->name('admin.update');
    Route::get('opeing/attendance', [App\Http\Controllers\RegistrationController::class, 'openingAttendance'])->name('admin.openingAttendance');
    Route::get('handout/attendance', [App\Http\Controllers\RegistrationController::class, 'handoutAttendance'])->name('admin.handoutAttendance');
    Route::get('slidejhs/attendance', [App\Http\Controllers\RegistrationController::class, 'slidejhsAttendance'])->name('admin.slidejhsAttendance');
    Route::get('viddoc/attendance', [App\Http\Controllers\RegistrationController::class, 'viddocAttendance'])->name('admin.viddocAttendance');
    Route::get('plenS/attendance', [App\Http\Controllers\RegistrationController::class, 'plenSAttendance'])->name('admin.plenSAttendance');
    Route::get('plenT/attendance', [App\Http\Controllers\RegistrationController::class, 'plenTAttendance'])->name('admin.plenTAttendance');
    Route::get('demo/attendance', [App\Http\Controllers\RegistrationController::class, 'demoAttendance'])->name('admin.demoAttendance');
    Route::get('lesson/attendance', [App\Http\Controllers\RegistrationController::class, 'lessonAttendance'])->name('admin.lessonAttendance');
    Route::get('google/attendance', [App\Http\Controllers\RegistrationController::class, 'googleAttendance'])->name('admin.googleAttendance');
    Route::get('sdo/attendance', [App\Http\Controllers\RegistrationController::class, 'sdoAttendance'])->name('admin.sdoAttendance');
    Route::get('national/attendance', [App\Http\Controllers\RegistrationController::class, 'nationalAttendance'])->name('admin.nationalAttendance');
    Route::get('digital/attendance', [App\Http\Controllers\RegistrationController::class, 'digitalAttendance'])->name('admin.digitalAttendance');
    Route::get('closing/attendance', [App\Http\Controllers\RegistrationController::class, 'closingAttendance'])->name('admin.closingAttendance');
    Route::get('export', [App\Http\Controllers\RegistrationController::class, 'exportView'])->name('admin.export');
});
