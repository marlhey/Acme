<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('plans')->insert([
            'model'=>'Modelo 1',
            'name'=>'Acme',
            'type'=>'pdf',
            'pages'=>51,
            'id_user'=>1,
            'id_zone'=>5,
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s')
        ]);
        DB::table('plans')->insert([
            'model'=>'Modelo 2',
            'name'=>'Acme 2',
            'type'=>'pdf',
            'pages'=>11,
            'id_user'=>3,
            'id_zone'=>4,
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s')
        ]);
        DB::table('plans')->insert([
            'model'=>'Modelo 3',
            'name'=>'Acme 3',
            'type'=>'pdf',
            'pages'=>10,
            'id_user'=>2,
            'id_zone'=>3,
            'created_at'=>date('Y-m-d h:m:s'),
            'updated_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
