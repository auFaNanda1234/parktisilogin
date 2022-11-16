<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array([
            'id'=> '2',
            'Nama'=> 'Aufa',
            'Alamat'=> 'Banyuwangi'
        ]));
    
            
    }
}