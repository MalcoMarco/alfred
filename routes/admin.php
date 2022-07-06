<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\TransaccionController;

Route::middleware('redirect_by_role')->group(function () {

    Route::get('admin', [AdminAuthController::class, 'login']);

});
Route::group(['middleware' => ['auth', 'role:Admin'], 'prefix'=>"dashboard"], function () {
    Route::get('',                      [TransaccionController::class, 'list']);
    Route::get('transaccion',           [TransaccionController::class, 'index'] )->name('transaccion.form');
    Route::post('transaccion',          [TransaccionController::class, 'store'] )->name('transaccion.store');
    Route::delete('transaccion/{transaccion}',          [TransaccionController::class, 'destroy'] )->name('transaccion.destroy');
    Route::get('transaccion/list',      [TransaccionController::class, 'list'] )->name('transaccion.list');
    Route::get('transaccion/export',    [TransaccionController::class, 'export'])->name('transaccion.export');
    //
});