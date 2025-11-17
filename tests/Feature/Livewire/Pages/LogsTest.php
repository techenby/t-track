<?php

use App\Livewire\Pages\Logs;
use App\Models\Log;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Livewire\Livewire;

describe('smoke', function () {
    beforeEach(function () {
        Log::factory()->count(2)
            ->state(new Sequence(
                ['created_at' => '2025-11-10 12:00:00'],
                ['created_at' => '2025-11-03 12:00:00'],
            ))
            ->create();
    });

    it('route renders successfully', function () {
        $this->get(route('logs'))
            ->assertOk()
            ->assertSee('Mon Nov 10, 2025 @ 6:00am')
            ->assertSee('Mon Nov 3, 2025 @ 6:00am');
    });

    it('component renders successfully', function () {
        Livewire::test(Logs::class)
            ->assertOk()
            ->assertSee('Mon Nov 10, 2025 @ 6:00am')
            ->assertSee('Mon Nov 3, 2025 @ 6:00am');
    });
});
