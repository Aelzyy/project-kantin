<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KantinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kantins')->insert([
            'nama' => 'Adhen Leo' ,
            'jeniskelamin' => 'cowo' ,
            'notelpon' => '081517205816' ,
        ]);
    }
}
