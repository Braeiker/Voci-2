<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of posts with variable data
        $postData = [
            [
                'post_name' => 'Joyful Moments',
                'author_id' => 1,
                'media_id' => 1,
            ],
            [
                'post_name' => 'Sunset Reflections',
                'author_id' => 2,
                'media_id' => 2,
            ],
            [
                'post_name' => 'Morning Tea Bliss',
                'author_id' => 1,
                'media_id' => 3,
            ],
            // Add more posts with variable data
        ];

        // Creating posts using variable data
        foreach ($postData as $postItem) {
            Post::create([
                'post_name' => $postItem['post_name'],
                'author_id' => $postItem['author_id'],
                'media_id' => $postItem['media_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
