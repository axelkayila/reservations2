<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Locality;
use DB;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        Locality::truncate();
        
        //Define data
       $localities = [
            ['postal_code' =>'1000', 'locality' => 'Bruxelles'],
            ['postal_code' =>'5000', 'locality' => 'Namur'],
            ['postal_code' =>'6700', 'locality' => 'Arlon'],
            ['postal_code' =>'4280', 'locality' => 'Liège'],
            ['postal_code' =>'2000', 'locality' => 'Anvers'],
            ['postal_code' =>'6000', 'locality' => 'Charleroi'],
        ];
        
        //Insert data in the table
        foreach ($localities as $data) {     
            DB::table('localities')->insert([
                'postal_code' => $data['postal_code'],
                'locality' => $data['locality'],
            ]);
        }

    }
}