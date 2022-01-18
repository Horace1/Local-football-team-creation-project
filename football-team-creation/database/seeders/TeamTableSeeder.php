<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([

            'team_name' => 'Hillsborough Rovers',

            'area' => 'Hillsborough',

            'home_pitch' => 'Hillsborough leisure centre',
        ],[

            'team_name' => 'Firth Park United',

            'area' => 'Firth Park',

            'home_pitch' => 'Concord Sports Centre',

        ],[

            'team_name' => 'Burngreave Rangers',

            'area' => 'Pitsmoor',

            'home_pitch' => 'Fir Vale Sports Centre',        

        ]);
    }
}
