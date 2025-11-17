<?php

use App\Livewire\Pages\Dashboard;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Dashboard::class)
        ->assertStatus(200);
});
