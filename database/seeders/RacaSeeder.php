<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racas')->insert([
            'nome' => 'Humano',
            'visao_escuro' => null,

        ]);
        DB::table('racas')->insert([
            'nome' => 'Elfo',
            'visao_escuro' => '18',
        ]);
    }
}
