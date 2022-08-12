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
            'data' => '2022-03-02',
        ]);

        DB::table('campanhas')->insert([
            'nome' => 'Los Escravos',
            'data' => '2022-02-03',
        ]);

    }
}
