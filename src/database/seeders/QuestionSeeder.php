<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::factory(5)->create();
        Question::factory(5)->state([
            'answerId' => null,
        ])->create();
    }
}
