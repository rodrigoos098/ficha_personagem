<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AtributoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atributos')->insert([
            'forca' => 15,
            'destreza' => 15,
            'constituicao' => 15,
            'inteligencia' => 8,
            'sabedoria' => 8,
            'carisma' => 8,
        ]);

        DB::table('atributos')->insert([
            'forca' => 8,
            'destreza' => 8,
            'constituicao' => 8,
            'inteligencia' => 15,
            'sabedoria' => 15,
            'carisma' => 15,
        ]);

        DB::table('atributos')->insert([
            'forca' => 15,
            'destreza' => 8,
            'constituicao' => 15,
            'inteligencia' => 8,
            'sabedoria' => 15,
            'carisma' => 8,
        ]);
    }
}
