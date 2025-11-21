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
    public $photo;
    public $photoDataUrl;

    public function save(): void
    {
        $this->validate([
            'voice' => 'required_if:photo,null',
            'photo' => 'required_if:voice,null',
        ]);

        Log::create([
            'voice_path' => $this->voice,
            'photo_path' => $this->photo,
        ]);

        $this->redirectRoute('logs');
    }

    #[On('native:' . PhotoTaken::class)]
    public function handlePhotoTaken(string $path): void
    {
        $this->photo = $path;

        $data = base64_encode(file_get_contents($path));
        $mime = mime_content_type($path);

        $this->photoDataUrl = "data:$mime;base64,$data";
    }

    public function recordVoice(): void
    {
        $this->voice = 'tmp/voice.mp3';
    }

    public function removePhoto(): void
    {
        $this->reset(['photo', 'photoDataUrl']);
    }

    public function takePhoto(): void
    {
        Camera::getPhoto();
    }
}
