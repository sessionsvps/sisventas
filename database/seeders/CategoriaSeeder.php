<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['descripcion' => 'Tecnología', 'estado' => true],
            ['descripcion' => 'Electrodomésticos', 'estado' => true],
            ['descripcion' => 'Muebles', 'estado' => true],
            ['descripcion' => 'Ropa', 'estado' => true],
            ['descripcion' => 'Alimentos', 'estado' => true],
            ['descripcion' => 'Juguetes', 'estado' => true],
            ['descripcion' => 'Deportes', 'estado' => true],
            ['descripcion' => 'Libros', 'estado' => true],
            ['descripcion' => 'Música', 'estado' => true],
            ['descripcion' => 'Películas', 'estado' => true],
            ['descripcion' => 'Joyería', 'estado' => true],
            ['descripcion' => 'Herramientas', 'estado' => true],
            ['descripcion' => 'Jardinería', 'estado' => true],
            ['descripcion' => 'Oficina', 'estado' => true],
            ['descripcion' => 'Automóviles', 'estado' => true],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
