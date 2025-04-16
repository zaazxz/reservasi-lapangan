<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    protected $fillable = [
        'field_id', 'customer_name', 'customer_phone', 'booking_date', 
        'start_time', 'end_time', 'status', 'dp_percentage', 'total_price', 
        'dp_amount', 'remaining_amount', 'is_dp_paid', 'is_fully_paid', 
        'dp_deadline'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
