<?php

use App\Http\Controllers\AdminController;

Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
