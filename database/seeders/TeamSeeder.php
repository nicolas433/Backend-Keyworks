<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Equipe 1',
            'type' => 'DESENVOLVIMENTO',
        ]);

        Team::create([
            'name' => 'Equipe 2',
            'type' => 'UX|UI',
        ]);

        Team::create([
            'name' => 'Equipe 3',
            'type' => 'FINANCEIRO',
        ]);
    }
}
