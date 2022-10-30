<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    public $fillable = ['name', 'surname', 'flight_id'];

    public function Flights(){
        return $this->belongsTo('App\Models\Flights');
    }

}
