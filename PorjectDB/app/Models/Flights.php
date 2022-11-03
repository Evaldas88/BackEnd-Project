<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;
    public $fillable = ['Destination', 'Airlines'];

    public function passenger(){
        return $this->hasMany('App\Models\Passenger');
    }

}
