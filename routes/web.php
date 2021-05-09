<?php

use App\Http\Controllers\OrgForm1Controller;
use Illuminate\Support\Facades\Route;

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

// หน้า OrgForm
Route::prefix('orgform_page')->group(function () {
    Route::get('/', [OrgForm1Controller::class, 'homeorg'])->name('homeorg');
    Route::get('/addorg1', [OrgForm1Controller::class, 'orgform1'])->name('orgform1');
    Route::get('/addorg2', [OrgForm1Controller::class, 'orgform2'])->name('orgform2');
    Route::get('/addorg3', [OrgForm1Controller::class, 'orgform3'])->name('orgform3');
    Route::get('/addorg4', [OrgForm1Controller::class, 'orgform4'])->name('orgform4');
});



