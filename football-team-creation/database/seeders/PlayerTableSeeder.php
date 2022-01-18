<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([

            'team_id' => '1',

            'player_name' => 'Player 1',

            'position' => 'Foward',

            'team' => 'Hillsborough Rovers',
        ],[

            'team_id' => '2',

            'player_name' => 'Player 2',

            'position' => 'Defender',

            'team' => 'Firth Park United',

        ],[

            'team_id' => '3',

            'player_name' => 'Player 3',

            'position' => 'Midfielder',

            'team' => 'Burngreave Rangers',       

        ]);
    }
}
