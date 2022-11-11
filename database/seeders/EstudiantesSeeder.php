<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;
class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Estudiante::create(['nombre' => 'Federico Angel Noriega Garcia','correo' => 'PruebaCorreoAngelSeeder@gmail.com', 'mensaje' =>'Registro con Seeder']);
        Estudiante::create(['nombre' => 'Maria Karina Beltran Curiel','correo' => 'PruebaCorreoMariaSeeder@gmail.com', 'mensaje' =>'Registro con Seeder persona 2']);
        Estudiante::create(['nombre' => 'Alejandra Estrada Lopez','correo' => 'PruebaCorreoAlejandraSeeder@gmail.com', 'mensaje' =>'Registro con Seeder persona 3']);
        Estudiante::create(['nombre' => 'Alberto Jose De la Torre Figueroa','correo' => 'PruebaCorreoAlbertoSeeder@gmail.com', 'mensaje' =>'Registro con Seeder persona 4']);
   
        Estudiante::factory(20)->create();
    }
}
