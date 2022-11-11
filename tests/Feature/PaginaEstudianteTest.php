<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaEstudianteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
   
        $response->assertSeeText(['Nombre del estudiante','Correo','Mensaje']);
    }
   /** @test */
    public function validacion_formulario(){

        $response = $this->post('/contacto', [
            'nombre' => '',
            'correo' => 'correoNoValido',
            'mensaje' =>'asd',
        ]);
        $response->assertSessionHasErrors([
          'nombre',
          'correo',
          'mensaje',  
        ]);
    }
     /** @test */
    public function prellenado_formulario(){
    
    $response = $this->get('/contacto/1234');
    $response->assertStatus(200);
    $this->assertEquals('Paulina_Figueroa', $response['nombre']);
    }
}
