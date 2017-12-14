<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RadarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 1000,
            'time' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);

        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 2, 2, 11, 33, 50),
            'number' => 'BBB222',
            'distance' => 2000,
            'time' => 22,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);
    }
}
