<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            ['title'=> ' QUARTERFINALS ',
            'date'=> '2023-11-17 00:00:00',
            'local_team'=> '1',
            'guest_team'=> '2',
            'local_score'=> '94',
            'guest_score'=> '138'],

            ['title'=> '  SEMIFINALS  ',
            'date'=> '2023-11-19 00:00:00',
            'local_team'=> '3',
            'guest_team'=> '4',
            'local_score'=> '113',
            'guest_score'=> '104'],

            ['title'=> ' CHAMPIONSHIP  ',
            'date'=> '2023-11-20 00:00:00',
            'local_team'=> '5',
            'guest_team'=> '6',
            'local_score'=> '126',
            'guest_score'=> '107']
        ]);
    }
}
