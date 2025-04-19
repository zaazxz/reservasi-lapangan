<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example',
            'password' => bcrypt('admin123'),
        ]);

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
