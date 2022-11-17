<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap"=>"Egi renaldi",
            "nis"=> 12220010,
            "jk"=> "L",
            "created_at"=>date("Y-m-d H:i:s"),
        ]);

        DB::table('students')->insert([
            "namalengkap"=>"David",
            "nis"=> 12220011,
            "jk"=> "L",
            "created_at"=>date("Y-m-d H:i:s"),
        ]);

        DB::table('students')->insert([
            "namalengkap"=>"Syawali",
            "nis"=> 12220012,
            "jk"=> "L",
            "created_at"=>date("Y-m-d H:i:s"),
        ]);
    }
}
