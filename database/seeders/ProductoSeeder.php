<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            // Entrantes
            [
                'nombre' => 'Patatas Fritas',
                'precio' => 5.00,
                'imagen' => 'patatas_fritas.jpg',
                'disponible' => true,
                'categoria_id' => 1, // Entrantes
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Patatas con Queso',
                'precio' => 7.00,
                'imagen' => 'patatas_con_queso.jpg',
                'disponible' => true,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Patatas Supreme',
                'precio' => 8.50,
                'imagen' => 'patatas_supreme.jpg',
                'disponible' => true,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Ensalada de la Casa',
                'precio' => 7.00,
                'imagen' => 'ensalada_de_la_casa.jpg',
                'disponible' => true,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Tomates de la Huerta',
                'precio' => 5.00,
                'imagen' => 'tomates_de_la_huerta.jpg',
                'disponible' => true,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            // Hamburguesas
            [
                'nombre' => 'Hamburguesa Clásica',
                'precio' => 7.00,
                'imagen' => 'hamburguesa_clasica.jpg',
                'disponible' => true,
                'categoria_id' => 2, // Hamburguesas
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hamburguesa con Queso',
                'precio' => 7.50,
                'imagen' => 'hamburguesa_con_queso.jpg',
                'disponible' => true,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hamburguesa BBQ',
                'precio' => 8.00,
                'imagen' => 'hamburguesa_bbq.jpg',
                'disponible' => true,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hamburguesa Doble',
                'precio' => 9.00,
                'imagen' => 'hamburguesa_doble.jpg',
                'disponible' => true,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hamburguesa Vegetariana',
                'precio' => 8.00,
                'imagen' => 'hamburguesa_vegetariana.jpg',
                'disponible' => true,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            // Carnes a la parrilla
            [
                'nombre' => 'Costillas BBQ',
                'precio' => 12.50,
                'imagen' => 'costillas_bbq.jpg',
                'disponible' => true,
                'categoria_id' => 3, // Carnes
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Chuletón de Ternera',
                'precio' => 25.00,
                'imagen' => 'chuleton_ternera.jpg',
                'disponible' => true,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Pollo Asado',
                'precio' => 10.00,
                'imagen' => 'pollo_asado.jpg',
                'disponible' => true,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Entrecot',
                'precio' => 17.50,
                'imagen' => 'entrecot.jpg',
                'disponible' => true,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Chorizo a la Parrilla',
                'precio' => 9.50,
                'imagen' => 'chorizo_parrilla.jpg',
                'disponible' => true,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Bebidas
            
            [
                'nombre' => 'Refresco',
                'precio' => 2.50,
                'imagen' => 'refresco.jpg',
                'disponible' => true,
                'categoria_id' => 4, // Bebidas
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Vino blanco',
                'precio' => 3.00,
                'imagen' => 'vino_blanco.jpg',
                'disponible' => true,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Vino tinto',
                'precio' => 3.00,
                'imagen' => 'vinto_tinto.jpg',
                'disponible' => true,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Cerveza',
                'precio' => 3.00,
                'imagen' => 'cerveza.jpg',
                'disponible' => true,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Agua mineral',
                'precio' => 2.50,
                'imagen' => 'tagua_mineral.jpg',
                'disponible' => true,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            // Postres
            [
                'nombre' => 'Tarta de Queso',
                'precio' => 4.50,
                'imagen' => 'tarta_de_queso.jpg',
                'disponible' => true,
                'categoria_id' => 5, // Postres
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Helado de Chocolate',
                'precio' => 3.50,
                'imagen' => 'helado_chocolate.jpg',
                'disponible' => true,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Flan Casero',
                'precio' => 4.00,
                'imagen' => 'flan_casero.jpg',
                'disponible' => true,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Brownie con Helado',
                'precio' => 5.00,
                'imagen' => 'brownie_helado.jpg',
                'disponible' => true,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Fruta de Temporada',
                'precio' => 3.00,
                'imagen' => 'fruta_temporada.jpg',
                'disponible' => true,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('productos')->insert($datos);
    }
}
