<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Passenger::create([ 
            'name' => 'John', 
            'surname' => 'Smith', 
            'flight_id' => '4'

        ]);
        \App\Models\Passenger::create([ 
            'name' => 'Ken', 
            'surname' => 'Wick', 
            'flight_id' => '1'

        ]);
        \App\Models\Passenger::create([ 
            'name' => 'Barbara', 
            'surname' => 'Straisen', 
            'flight_id' => '3'
        ]);
    }

    }

