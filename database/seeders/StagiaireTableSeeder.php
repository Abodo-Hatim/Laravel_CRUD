<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagiaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stagiaire::factory()->count(10)->create();
    }
}
