<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pruebaDireccionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFormularioI()
    {
     $this ->get('FormularioI/')
     ->assertStatus(200);

    }
    public function testFormularioII()
    {
     $this ->get('FormularioII/')
     ->assertStatus(200);

    }
    public function testFormularioIII()
    {
     $this ->get('FormularioIII/')
     ->assertStatus(200);

    }
    public function testWelcome()
    {
     $this ->get('/')
     ->assertStatus(200);

    }
    public function testInicioSesion()
    {
     $this ->get('InicioSesion/')
     ->assertStatus(200);

    }
    public function testDocumentos()
    {
     $this ->get('Documentos/')
     ->assertStatus(200);

    }
}
