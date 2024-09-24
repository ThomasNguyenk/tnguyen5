<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Etudiant::factory(10)->create();
    }
}

