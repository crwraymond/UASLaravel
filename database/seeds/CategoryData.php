<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name'=>'Beach',
                ],
                [
                    'name'=>'Maountain',
                ]
            ]);
    }
}
