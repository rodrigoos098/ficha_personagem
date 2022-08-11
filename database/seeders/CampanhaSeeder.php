<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CampanhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanhas')->insert([
            'nome' => 'Tirania Draconiana',
            'data' => '02-03-2022',
        ]);

        DB::table('campanhas')->insert([
            'nome' => 'Los Escravos',
            'data' => '12-03-2022',
        ]);

    }
}
