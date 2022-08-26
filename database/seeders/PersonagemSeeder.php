<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PersonagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personagens')->insert([
            'nome' => 'Rodrigo',
            'xp' => '0',
            'idade' => '23',
            'altura' => '185',
            'peso' => '58',
            'classe_id' => '2',
            'raca_id' => '2',
            'atributo_id' => '1',
        ]);

        DB::table('personagens')->insert([
            'nome' => 'Taylor Swift',
            'xp' => '0',
            'idade' => '32',
            'altura' => '180',
            'peso' => '54',
            'classe_id' => '1',
            'raca_id' => '1',
            'atributo_id' => '2',
        ]);
    }
}
