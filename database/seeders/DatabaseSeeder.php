<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        KLPD::factory()->createMany([
            ['name' => 'Kementerian'],
            ['name' => 'Lembaga'],
            ['name' => 'Provinsi'],
            ['name' => 'Kota'],
            ['name' => 'Kabupaten'],
            ['name' => 'BUMN'],
            ['name' => 'BUMD'],
            ['name' => 'PTNBH'],
            ['name' => 'Swasta'],
            ['name' => 'B2B'],
            ['name' => 'Kesehatan'],
            ['name' => 'Lainnya'],
        ]);
    }
}
