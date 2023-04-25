<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FermeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fermes')->insert([
            [
                'nom' => 'Ferme Test',
                'adresse' => 'Akpakpa La Roche',
                'description' => '',
                'statut' => true
            ]
        ]);
    }
}
