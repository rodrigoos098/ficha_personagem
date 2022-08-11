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
            'nome' => 'humano',
        ]);
        DB::table('racas')->insert([
            'nome' => 'elfo',
            'visao_escuro' => '18',
        ]);
    }
}
