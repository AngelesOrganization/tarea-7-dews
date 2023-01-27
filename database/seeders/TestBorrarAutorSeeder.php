<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestBorrarAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('autores')->insert([
            'nombre' => 'John',
            'apellidos' => 'Ronald Reuel Tolkien',
            'nacionalidad' => 'Británica',
        ]);
    }
}
