<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Jobs\QueueJob::dispatch('Логирование через Redis');
});
