<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'lastname'  => 'admin',
            'phone'     => '7999999999',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('admin'),
            'status'    => 1,
        ]);
    }
}
