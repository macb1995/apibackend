<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ingrediente;
use App\Models\Pastel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Pastel::factory()->times(15)->create();
        Ingrediente::factory()->times(10)->create()->each(
            function($ingrediente){
                $ingrediente->pastels()->sync(
                    Pastel::all()->random(3)
                );
            }
        );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
