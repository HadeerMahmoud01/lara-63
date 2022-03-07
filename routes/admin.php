<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/users', UsersController::class);
});

?>