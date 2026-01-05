<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('journals.index');
});

Route::resource('journals', JournalController::class);
