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
        \App\Radar::create([
            'date' => Carbon::create(2017, 1, 1, 23, 25, 50),
            'number' => 'AAA001',
            'distance' => 1000,
            'time' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);

        \App\Radar::create([
            'date' => Carbon::create(2017, 2, 2, 11, 33, 50),
            'number' => 'BBB222',
            'distance' => 2000,
            'time' => 22,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);

        \App\Radar::create([
            'date' => Carbon::create(2017, 3, 3, 13, 43, 50),
            'number' => 'CCC333',
            'distance' => 2000,
            'time' => 42,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);
        \App\Driver::create([
            'name' => 'Jonas',
            'city' => 'Klaipeda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);
        \App\Driver::create([
            'name' => 'Petras',
            'city' => 'Kaunas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);
        \App\Driver::create([
            'name' => 'Antanas',
            'city' => 'Vilnius',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
                ]);

                
        $radarsDistance = [5000, 4500, 5100];

        $raide = 'ABCDEFGHIJKLMNOPRSTUVZ';
        $sk = strlen($raide) - 1;

        $timeFrom = Carbon::create(2017, 1, 1, 0, 0, 0)->timestamp;
        $timeTo = Carbon::now()->timestamp;

        for ($i = 0; $i < 1000; $i++) {
            
            $distance = $radarsDistance[ rand(0, 2)];
            $speed = rand(120, 190);
            $time = round($distance / ($speed / 3.6));  

            $timestamp = rand($timeFrom, $timeTo);

            $number = $raide[rand(0, $sk)] . $raide[rand(0, $sk)] . $raide[rand(0, $sk)] .
                rand(0, 9) . rand(0, 9) . rand(0, 9);

            $radar = new \App\Radar();
            $radar->date = Carbon::createFromTimestamp($timestamp);
            $radar->number = $number;
            $radar->distance = $distance;
            $radar->time = $time;
            
            $radar->save();
        }
    }
}
