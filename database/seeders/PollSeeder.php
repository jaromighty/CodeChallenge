<?php

namespace Database\Seeders;

use App\Models\Poll;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $polls = [
            [ 'name' => 'Which food makes you gag?' ],
            [ 'name' => 'Who would you choose to narrate your life?' ],
            [ 'name' => 'In one word, describe how you feel when you watch the sunset.' ],
            [ 'name' => 'Do you put your toilet paper facing in or out?' ],
            [ 'name' => 'How many pets have you had in your life?' ],
            [ 'name' => 'What sense could you never live without?' ],
        ];

        foreach ($polls as $poll) {
            Poll::create([
                'name' => $poll['name']
            ]);
        }
    }
}
