<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth', 'owner'])->group(function() {
    Route::get('/owner', [OwnerController::class, 'index'])->name('owner.index');
    Route::get('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
    Route::post('/owner/store', [OwnerController::class, 'store'])->name('owner.store');

    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::post('/sort-by-date', [ReportController::class, 'sortByDate'])->name('report.sortByDate');
    Route::get('/report/{user_id}', [ReportController::class, 'show'])->name('report.show');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::post('/check-in', [EmployeeController::class, 'checkIn'])->name('employee.check-in');
    Route::get('/check-out', [EmployeeController::class, 'checkOutView'])->name('employee.check-out-view');
    Route::post('/check-out', [EmployeeController::class, 'checkOut'])->name('employee.check-out');
});

require __DIR__.'/auth.php';
