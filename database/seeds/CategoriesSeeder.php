<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Destacados',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Electro',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Muebles',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Deco',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Juguetes',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Grafica',
                    'created_at' => date('Y-m-d H:i:s')
                ],
            ]
        );
    }
}
