<?php

namespace App\Livewire\Pages;

use App\Models\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Native\Mobile\Events\Camera\PhotoTaken;
use Native\Mobile\Facades\Camera;

class CreateLog extends Component
{
    public $voice;
    public $image;

    public function save(): void
    {
        $this->validate([
            'voice' => 'required_if:image,null',
            'image' => 'required_if:voice,null',
        ]);

        Log::create([
            'voice_path' => $this->voice,
            'image_path' => $this->image,
        ]);

        $this->redirectRoute('logs');
    }

    #[On('native:' . PhotoTaken::class)]
    public function handlePhotoTaken(string $path): void
    {
        dd($path);
        // $this->image = $path;
    }

    public function removePhoto(): void
    {
        $this->image = null;
    }

    public function takePhoto(): void
    {
        Camera::getPhoto();
    }
}
