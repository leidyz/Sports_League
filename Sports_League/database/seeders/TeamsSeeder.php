<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
        ['name' => 'Los Angeles Lakers',
        'coach' => 'Darvin Ham',
        'points' => '115'],

        ['name' => 'Boston Celtics',
        'coach' => 'Joe Mazzulla',
        'points' => '116'],

        ['name' => 'Golden State Warriors',
        'coach' => 'Steve Kerr',
        'points' => '113'],

        ['name' => 'Chicago Bulls',
        'coach' => 'Billy Donovan',
        'points' => '107'],

        ['name' => 'San Antonio Spurs',
        'coach' => 'Gregg Popovich',
        'points' => '109'],

        ['name' => 'Miami Heat',
        'coach' => 'Erik Spoelstra',
        'points' => '110']
        ]);
    }
}
