<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Jardin', 'code' => 'C'],
            ['name' => 'Primaire', 'code' => 'PN'],
            ['name' => 'Sencondaire', 'code' => 'N'],
            ['name' => 'Lycée', 'code' => 'P'],
            ['name' => 'Université', 'code' => 'J'],
            ['name' => 'Senior Secondary', 'code' => 'S'],
        
        ];

        DB::table('class_types')->insert($data);

    }
}
