<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Autores;
use Database\Seeders\TestConsultarAutoresSeeder;
use Database\Seeders\TestConsultarLibrosSeeder;
use Database\Seeders\TestConsultarDatosLibroSeeder;
use Database\Seeders\TestBorrarLibroSeeder;
use Database\Seeders\TestBorrarAutorSeeder;

class IntegrationTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_consultar_autores()
    {
        
        $this->seed(TestConsultarAutoresSeeder::class);
        $response = $this->get('/autores');
        $response->assertSee('Isaac');
        $response->assertSee('Asimov');
        $response->assertSee('Rusia');
    }

    public function test_consultar_libros()
    {
        
        $this->seed(TestConsultarLibrosSeeder::class);
        $response = $this->get('/autores/1');
        $response->assertSee('Un guijarro en el cielo');
        $response->assertSee('19/01/1950');

        $response->assertSee('Fundación');
        $response->assertSee('01/06/1951');

        $response->assertSee('Yo, robot');
        $response->assertSee('02/12/1950');
    }


    public function test_borrar_libro()
    {
        
        $this->seed(TestBorrarLibroSeeder::class);
        $response = $this->delete('/libros/1');
        $response->assertDontSee('La Comunidad del Anillo');
        $response->assertDontSee('29/07/1954');
    }

    public function test_borrar_autor()
    {
        
        $this->seed(TestBorrarAutorSeeder::class);
        $response = $this->delete('/autores/1');
        $response->assertDontSee('John');
        $response->assertDontSee('Ronald Reuel Tolkien');
    }
    public function test_detalles_libro()
    {
        
        $this->seed(TestConsultarDatosLibroSeeder::class);
        $response = $this->get('/libros/1');

        $response->assertSee('La Comunidad del Anillo');
        $response->assertSee('29/07/1954');
}
}