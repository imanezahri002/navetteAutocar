<?php

namespace Database\Seeders;

use App\Models\Societes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocietesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Societes::factory()
        ->count(5)
        ->create();
    }
}
