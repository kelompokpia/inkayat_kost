<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MysqlDumpSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //mengirim data .sql ke database 
        DB::unprepared(file_get_contents(database_path('mysql/db_inkayat.sql')));
    }
}
