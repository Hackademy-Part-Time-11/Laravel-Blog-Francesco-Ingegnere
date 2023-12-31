<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ['car_id', 'user_name'];

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function accessories() {
        return $this->belongsToMany(Accessory::class);
    }
}
