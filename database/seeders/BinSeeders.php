<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Facker\Factory as Faker;

class BinSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range (1, 5)as $value){
            DB::table('bins')->insert([
                'location'=>$faker->country,
                'compartment'=>$faker->compartment,
                'capacity'=> $faker->capacity,
                'status'=> $faker->randomElement(['F','NF'])
            ]);
        }

    }
}
