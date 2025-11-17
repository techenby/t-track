<?php

use App\Livewire\Pages\CreateLog;
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

describe('validation', function () {
    it('required voice if image is not set', function () {
        Livewire::test(CreateLog::class)
            ->assertSet('voice', null)
            ->assertSet('image', null)
            ->call('save')
            ->assertHasErrors('voice')
            ->set('image', 'tmp/image.jpg')
            ->call('save')
            ->assertHasNoErrors();
    });

    it('required image if voice is not set', function () {
        Livewire::test(CreateLog::class)
            ->assertSet('voice', null)
            ->assertSet('image', null)
            ->call('save')
            ->assertHasErrors('image')
            ->set('voice', 'tmp/voice.mp3')
            ->call('save')
            ->assertHasNoErrors();
    });
});

describe('saving', function () {
    it('can create a log', function () {
        Livewire::test(CreateLog::class)
            ->set('voice', 'tmp/voice.mp3')
            ->set('image', 'tmp/image.jpg')
            ->call('save');

        $this->assertDatabaseHas('logs', [
            'voice_path' => 'tmp/voice.mp3',
            'image_path' => 'tmp/image.jpg',
        ]);
    });
});
