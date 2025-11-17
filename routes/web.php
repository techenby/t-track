<?php

use App\Livewire\Pages\Logs;
use Illuminate\Support\Facades\Route;

Route::get('/', Logs::class)->name('logs');
