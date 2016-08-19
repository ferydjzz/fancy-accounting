<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'jonathan',
            'email' => 'jonathan_zw@yahoo.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
