<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => '1ère année', 'class_type_id' => $ct[2]],
            ['name' => '2ème année', 'class_type_id' => $ct[2]],
            ['name' => '3ème année', 'class_type_id' => $ct[2]],
            ['name' => '4ème année', 'class_type_id' => $ct[3]],
            ['name' => '5ème année', 'class_type_id' => $ct[3]],
            ['name' => '6ème année', 'class_type_id' => $ct[4]],
            ['name' => '7ème année', 'class_type_id' => $ct[4]],
            ['name' => '8ème année', 'class_type_id' => $ct[5]],
            ['name' => '9ème année', 'class_type_id' => $ct[5]],
            ['name' => '10ème année', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
