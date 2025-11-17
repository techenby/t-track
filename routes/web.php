<?php

use App\Livewire\Pages\CreateLog;
use App\Livewire\Pages\Logs;
use Illuminate\Support\Facades\Route;

Route::get('/', Logs::class)->name('logs');
Route::get('logs/create', CreateLog::class)->name('logs.create');
