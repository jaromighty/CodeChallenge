<?php

namespace Database\Seeders;

use App\Models\Poll;
use App\Models\Response;
use App\Models\User;
use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pollResponses = [
            ['poll_id' => 1, 'responses' => [ 'Pizza', 'Tacos', 'Sushi', 'Falafel' ]],
            ['poll_id' => 2, 'responses' => [ 'Morgan Freeman', 'Steve Carrell', 'Samuel L. Jackson', 'Christopher Walken' ]],
            ['poll_id' => 3, 'responses' => [ 'Elated', 'Peaceful', 'Blessed', 'Happy' ]],
            ['poll_id' => 4, 'responses' => [ 'Facing In', 'Facing Out', 'On the floor' ]],
            ['poll_id' => 5, 'responses' => [ '1', '2', '3', '4' ]],
            ['poll_id' => 6, 'responses' => [ 'Smell', 'Hearing', 'Touch', 'Taste' ]]
        ];

        foreach ($pollResponses as $poll) {
            foreach ($poll['responses'] as $response) {
                Response::create([
                    'response' => $response,
                    'poll_id' => $poll['poll_id'],
                ]);
            }
        }
    }
}
