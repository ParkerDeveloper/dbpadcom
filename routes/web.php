<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

/* Main */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verify')->name('home');
Route::get('/information', [App\Http\Controllers\HomeController::class, 'information'])->middleware('verify')->name('information');
Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->middleware('verify')->name('contacts');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->middleware('verify')->name('logout');

/* Terminal */
Route::get('/terminal', [App\Http\Controllers\Terminal\TerminalController::class, 'index'])->middleware('dispatcher')->name('terminal');
Route::post('/terminal/update', [App\Http\Controllers\Terminal\TerminalController::class, 'update'])->middleware('admin')->name('terminal.update');
Route::post('/terminal/update/status/{id}', [App\Http\Controllers\Terminal\TerminalController::class, 'update_status'])->middleware('admin')->name('terminal.update_status');
Route::get('/terminal/update/status/{id}', [App\Http\Controllers\Terminal\TerminalController::class, 'update_status'])->middleware('admin')->name('terminal.update_status');
Route::get('/terminal/delete/{id}', [App\Http\Controllers\Terminal\TerminalController::class, 'destroy'])->middleware('admin')->name('terminal.delete');

/* Panel */
Route::get('/panel', [App\Http\Controllers\Panel::class, 'index'])->middleware('verify')->name('panel');
Route::post('/panel/update/{id}', [App\Http\Controllers\Panel::class, 'edit'])->middleware('admin')->name('panel.update');
Route::get('/panel/update/{id}', [App\Http\Controllers\Panel::class, 'edit'])->middleware('admin')->name('panel.update');
Route::put('/panel/update/{id}', [App\Http\Controllers\Panel::class, 'edit'])->middleware('admin')->name('panel.update');

/* Profile */
Route::get('/profile', [App\Http\Controllers\Profile\ProfileController::class, 'index'])->middleware('verify')->name('profile');
Route::get('/profile/settings', [App\Http\Controllers\Profile\ProfileController::class, 'settings'])->middleware('verify')->name('profile');
Route::post('/profile/edit/{id}', [App\Http\Controllers\Profile\ProfileController::class, 'update_profile'])->middleware('admin')->name('profile.edit');
Route::get('/profile/edit/{id}', [App\Http\Controllers\Profile\ProfileController::class, 'update_profile'])->middleware('admin')->name('profile.edit');

/* Admin  */
Route::middleware([])->prefix('admin')->group(function (){
    Route::get('/dashboard/', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->middleware('admin')->name('dashboard');

    Route::get('/edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'getProfile'])->name('edit');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('update');

    Route::get('/add', [App\Http\Controllers\Admin\AdminController::class, 'add'])->middleware('admin')->name('add');
    Route::get('/add/update/cause', [App\Http\Controllers\Admin\AdminController::class, 'add_update_cause'])->middleware('admin')->name('add.update.cause');
    Route::post('/add/update/cause', [App\Http\Controllers\Admin\AdminController::class, 'add_update_cause'])->middleware('admin')->name('add.update.cause');

    Route::get('/add/update/state', [App\Http\Controllers\Admin\AdminController::class, 'add_update_state'])->middleware('admin')->name('add.update.state');
    Route::post('/add/update/state', [App\Http\Controllers\Admin\AdminController::class, 'add_update_state'])->middleware('admin')->name('add.update.state');

    Route::get('/add/delete/state/{id}', [App\Http\Controllers\Admin\AdminController::class, 'add_delete_state'])->middleware('admin')->name('add.delete.state');
    Route::get('/add/delete/cause/{id}', [App\Http\Controllers\Admin\AdminController::class, 'add_delete_cause'])->middleware('admin')->name('add.delete.cause');
});
