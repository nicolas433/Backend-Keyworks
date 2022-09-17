<?php

namespace Database\Seeders;

use App\Models\CardGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardGroup::create([
            'name' => 'Aguardando'
        ]);

        CardGroup::create([
            'name' => 'Em Andamento'
        ]);

        CardGroup::create([
            'name' => 'Pendência'
        ]);

        CardGroup::create([
            'name' => 'Finalizado'
        ]);
    }
}
