<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of authors with variable data
        $authorsData = [
            [
                'name' => 'John',
                'surname' => 'Doe',
            ],
            [
                'name' => 'Alice',
                'surname' => 'Smith',
            ],
        ];

        // Creating authors using variable data
        foreach ($authorsData as $authorData) {
            Author::create([
                'name' => $authorData['name'],
                'surname' => $authorData['surname'],
                'created_at' => now(), // Use the now() function to get the current date and time
                'updated_at' => now(),
            ]);
        }
    }
}
