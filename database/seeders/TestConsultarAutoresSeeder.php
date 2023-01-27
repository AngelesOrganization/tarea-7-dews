<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestConsultarAutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->insert([
            'nombre' => 'Isaac',
            'apellidos' => 'Asimov',
            'nacionalidad' => 'Rusia',
        ]);
    }
}
