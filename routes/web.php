<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MeetingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->middleware(['auth', 'role:super-admin'])->group(function () {

    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('/', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::put('{employee}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::delete('{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    });


    

    Route::get('/', function () {
        return redirect()->route('employee.index');
    });

    // Fallback route for any other route under /admin
    Route::fallback(function () {
        return redirect()->route('employee.index');
    });
});

// Front End
Route::prefix('/')->middleware([])->group(function () {

    Route::get('/', [MeetingController::class, 'index'])->name('booking.index');

    Route::get('booking/create', [MeetingController::class, 'create'])->name('booking.create');
    Route::post('booking', [MeetingController::class, 'store'])->name('booking.store');

    
    // Fallback route for any other route under /admin
    Route::fallback(function () {
        return redirect()->route('home');
    });
});

Auth::routes([
    'verify' => true,
]);

require __DIR__ . '/auth.php';