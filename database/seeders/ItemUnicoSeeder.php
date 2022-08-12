<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemUnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itens_unicos')->insert([
            'nome' => 'cajado do vazio',
            'raridade' => 'raro',
            'peso' => '2',
        ]);
        DB::table('itens_unicos')->insert([
            'nome' => 'escudo de tercio',
            'raridade' => 'lendario',
            'peso' => '10',

        ]);
    }
}
