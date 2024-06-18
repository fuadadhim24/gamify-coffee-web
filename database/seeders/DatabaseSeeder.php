<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create quizzes
        $quiz1 = Quiz::create(['title' => 'Geografi Indonesia']);
        $quiz2 = Quiz::create(['title' => 'Sejarah Indonesia']);

        // Create questions for quiz1
        $question1 = Question::create([
            'id_quiz' => $quiz1->id_quiz,
            'content' => 'Apa ibu kota Indonesia?'
        ]);
        Option::create([
            'question_id' => $question1->question_id,
            'content' => 'Jakarta',
            'is_correct' => true
        ]);
        Option::create([
            'question_id' => $question1->question_id,
            'content' => 'Bandung',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question1->question_id,
            'content' => 'Surabaya',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question1->question_id,
            'content' => 'Medan',
            'is_correct' => false
        ]);

        $question2 = Question::create([
            'id_quiz' => $quiz1->id_quiz,
            'content' => 'Berapa jumlah provinsi di Indonesia?'
        ]);
        Option::create([
            'question_id' => $question2->question_id,
            'content' => '34',
            'is_correct' => true
        ]);
        Option::create([
            'question_id' => $question2->question_id,
            'content' => '33',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question2->question_id,
            'content' => '35',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question2->question_id,
            'content' => '32',
            'is_correct' => false
        ]);

        // Create questions for quiz2
        $question3 = Question::create([
            'id_quiz' => $quiz2->id_quiz,
            'content' => 'Siapa proklamator kemerdekaan Indonesia?'
        ]);
        Option::create([
            'question_id' => $question3->question_id,
            'content' => 'Soekarno-Hatta',
            'is_correct' => true
        ]);
        Option::create([
            'question_id' => $question3->question_id,
            'content' => 'Soekarno',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question3->question_id,
            'content' => 'Hatta',
            'is_correct' => false
        ]);
        Option::create([
            'question_id' => $question3->question_id,
            'content' => 'Sukarno',
            'is_correct' => false
        ]);
    }
}
