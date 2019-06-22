<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listIds = array(
            1,
            2
        );

        $faker = Faker::create();

        for($i=0;$i<32;$i++) {
            DB::table('items')->insert([
                'checklist_id' => $listIds[array_rand($listIds)],
                'item' => $faker->text(64)
            ]);
        }
    }
}
