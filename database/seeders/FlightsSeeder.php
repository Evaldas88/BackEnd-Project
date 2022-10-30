<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Flights::create([ 
            'Destination' => 'Italy', 
            'Airlines' => 'AirGuru', 
         ]);     
         \App\Models\Flights::create([ 
            'Destination' => 'Canada', 
            'Airlines' => 'AirAmerica', 
         ]);
         \App\Models\Flights::create([ 
            'Destination' => 'Germanay', 
            'Airlines' => 'Ryanair', 
         ]);
         \App\Models\Flights::create([ 
            'Destination' => 'Lithuania', 
            'Airlines' => 'kokosai', 
         ]);
         \App\Models\Flights::create([ 
            'Destination' => 'Japan', 
            'Airlines' => 'NihonAir', 
         ]);

    }
}
