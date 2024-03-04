<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of media with updated variable data
        $mediaData = [
            [
                'name' => 'Nature',
                'category' => 'IMG',
                'description' => 'Exploring the beauty of nature...',
                'file' => '1678912345.jpg',
            ],
            [
                'name' => 'City Lights',
                'category' => 'IMG',
                'description' => 'Capturing the vibrant city lights...',
                'file' => '1678912356.jpg',
            ],
            [
                'name' => 'Coffee Break',
                'category' => 'VIDEO',
                'description' => 'Relaxing with a cup of coffee...',
                'file' => '1678912367.mp4',
            ],
            // Add more media with updated variable data
        ];

        // Creating media using updated variable data
        foreach ($mediaData as $mediaItem) {
            Media::create([
                'name' => $mediaItem['name'],
                'category' => $mediaItem['category'],
                'description' => $mediaItem['description'],
                'file' => $mediaItem['file'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
