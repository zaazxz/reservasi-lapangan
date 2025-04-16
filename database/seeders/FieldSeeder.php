<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str; 
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Field::create([
            'id' => Str::uuid(),
            'name' => 'Field 1',
            'price_per_hour' => 100000
        ]);
        Field::create([
            'id' => Str::uuid(),
            'name' => 'Field 2',
            'price_per_hour' => 150000
        ]);
    }
}
