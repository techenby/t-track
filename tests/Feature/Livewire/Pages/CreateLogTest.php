<?php

use App\Livewire\Pages\CreateLog;
use App\Livewire\Pages\Logs;
use App\Models\Log;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Livewire\Livewire;

describe('smoke', function () {
    it('route renders successfully', function () {
        $this->get(route('logs.create'))
            ->assertOk();
    });

    it('component renders successfully', function () {
        Livewire::test(CreateLog::class)
            ->assertOk();
    });
});
