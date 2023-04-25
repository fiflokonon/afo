<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'role' => 'Admin',
                'code' => 'admin',
                'description' => 'Administrateur',
                'statut' => true
            ],
            [
                'role' => 'Propriétaire',
                'code' => 'proprio',
                'description' => 'Propriétaire',
                'statut' => true
            ],
            [
                'role' => 'Gérant',
                'code' => 'manager',
                'description' => 'Gérant',
                'statut' => true
            ],
            [
                'role' => 'Vétérinaire',
                'code' => 'veto',
                'description' => 'Vétérianaire',
                'statut' => true
            ],
            [
                'role' => 'Ouvrier',
                'code' => 'ouvrier',
                'description' => 'Ouvrier',
                'statut' => true
            ],
        ]);
    }
}
