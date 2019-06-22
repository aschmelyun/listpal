<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checklists')->insert([
            'hash' => Str::random(32)
        ]);

        DB::table('checklists')->insert([
            'hash' => Str::random(32)
        ]);
    }
}
