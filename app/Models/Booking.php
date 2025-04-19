<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    // protected $guarded = ['created_at', 'updated_at'];
    protected $guarded = ['created_at', 'updated_at'];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
