<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'nome' => 'Guerreiro',
            'dado_vida' => '12',
        ]);
        DB::table('classes')->insert([
            'nome' => 'Mago',
            'dado_vida' => '8',
        ]);

    }
}
