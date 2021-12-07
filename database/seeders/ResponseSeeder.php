<?php

namespace Database\Seeders;

use App\Models\Poll;
use App\Models\Response;
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
        $ipAddresses = [
            '133.58.59.122',
            '206.47.196.207',
            '3.131.46.243',
            '61.43.170.224',
            '26.80.139.228',
            '36.69.61.61',
            '107.190.253.52',
            '45.236.65.26',
            '169.180.174.36',
            '237.89.49.86',
            '137.0.216.117',
            '43.21.34.149',
            '145.68.46.19',
            '181.32.160.168',
            '211.28.213.238',
            '145.124.62.240',
            '200.135.131.97',
            '239.174.33.109',
            '239.242.248.130',
            '139.13.23.249',
        ];

        $polls = Poll::get();

        $pollResponses = [
            1 => [ 'Pizza', 'Tacos', 'Sushi', 'Falafel' ],
            2 => [ 'Morgan Freeman', 'Steve Carrell', 'Samuel L. Jackson', 'Christopher Walken' ],
            3 => [ 'Elated', 'Peaceful', 'Blessed', 'Happy' ],
            4 => [ 'Facing In', 'Facing Out', 'On the floor' ],
            5 => [ '1', '2', '3', '4' ],
            6 => [ 'Smell', 'Hearing', 'Touch', 'Taste' ]
        ];

        foreach ($ipAddresses as $address) {
            foreach ($polls as $poll) {
                $poll->responses()->save(new Response([
                    'ip_address' => $address,
                    'response' => $pollResponses[$poll->id][array_rand($pollResponses[$poll->id])]
                ]));
            }
        }
    }
}
