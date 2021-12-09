<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pollAnswers = [
            ['poll_id' => 1, 'responses' => [ 'Pizza', 'Tacos', 'Sushi', 'Falafel' ]],
            ['poll_id' => 2, 'responses' => [ 'Morgan Freeman', 'Steve Carrell', 'Samuel L. Jackson', 'Christopher Walken' ]],
            ['poll_id' => 3, 'responses' => [ 'Elated', 'Peaceful', 'Blessed', 'Happy' ]],
            ['poll_id' => 4, 'responses' => [ 'Facing In', 'Facing Out', 'On the floor' ]],
            ['poll_id' => 5, 'responses' => [ '1', '2', '3', '4' ]],
            ['poll_id' => 6, 'responses' => [ 'Smell', 'Hearing', 'Touch', 'Taste' ]]
        ];

        foreach ($pollAnswers as $answers) {
            foreach ($answers['responses'] as $response) {
                Answer::create([
                    'text' => $response,
                    'poll_id' => $answers['poll_id'],
                ]);
            }
        }
    }
}
