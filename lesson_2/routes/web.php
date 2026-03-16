<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::controller(TaskController::class)->group(function () {
    Route::get('/task1', 'task1');
    Route::get('/task2', 'task2');
    Route::get('/task3', 'task3');
    Route::get('/task4', 'task4');
});
