<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Field extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    protected $fillable = ['name', 'price_per_hour'];
    
    public function bookings() {
        return $this->hasMany(Booking::class, 'field_id', 'id');
    }
}
