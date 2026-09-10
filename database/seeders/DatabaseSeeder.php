<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tema')->updateOrInsert(
            ['id_tema' => 1],
            [
                'nome' => 'Matemática Básica',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
