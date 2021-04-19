<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    //Auth::routes();
    // Authentication Routes...
    Route::get('/', function(){
        return redirect(route('admin.dashboard'));
    });
    Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/dashboard/movie/add' ,[App\Http\Controllers\Admin\MovieController::class, 'add'])->name('admin.movie.add');  
    Route::post('/dashboard/movie/add' ,[App\Http\Controllers\Admin\MovieController::class, 'store'])->name('admin.movie.add');   
    
    Route::get('/dashboard/movie/edit' ,[App\Http\Controllers\Admin\MovieController::class, 'edit'])->name('admin.movie.edit');  
    Route::post('/dashboard/movie/edit' ,[App\Http\Controllers\Admin\MovieController::class, 'update'])->name('admin.movie.edit');      

    Route::get('/dashboard/movie/delete/{id}' ,[App\Http\Controllers\Admin\MovieController::class, 'delete'])->name('admin.movie.delete');  
});

?>