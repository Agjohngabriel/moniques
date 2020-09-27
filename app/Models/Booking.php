<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
    	'departure_date', 'bus_type', 'adults', 'child', 'terminal', 'first_name', 'last_name', 'email', 'phone', 'return_date' 
    ];
    public function info(){
    	$this->HasMany(App\Info::class);
    }
}
