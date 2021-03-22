<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=>'Christian Raymond Wijaya',
                    'email'=>'christian.wijaya003@binus.ac.id',
                    'password'=>Hash::make('asd123'),
                    'phone'=>'082220174609',
                    'role'=>'Admin'
                ],
                [
                    'name'=>'Christian Raymond Wijaya',
                    'email'=>'raymond_wijaya10@yahoo.co.id',
                    'password'=>Hash::make('asd123'),
                    'phone'=>'082220177500',
                    'role'=>'Admin'
                ]
            ]);
    }
}
