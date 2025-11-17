<?php

namespace App\Livewire\Pages;

use App\Models\Log;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Logs extends Component
{
    #[Computed]
    public function logs(): Collection
    {
        return Log::orderByDesc('created_at')->get();
    }
}
