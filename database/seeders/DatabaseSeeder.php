<?php

namespace Database\Seeders;

use App\Models\Log;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $start = now()->subWeeks(11);

        Log::factory()
            ->count(10)
            ->state(new Sequence(
                fn (Sequence $sequence) => [
                    'created_at' => $start->addWeek(),
                    'voice_path' => rand(0, 1) ? null : 'fake-voice.mp3',
                    'image_path' => rand(0, 1) ? null : 'fake-image.jpg',
                ],
            ))
            ->create();
    }
}
