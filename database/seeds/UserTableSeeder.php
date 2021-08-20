<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'HouseDeals Administrator',
                'email' => 'admin@housedeals.com',
                'password' => Hash::make('housedeals2021'),
                'user_code' => 'HD/'.rand(11000,99990),
                'role' => 'admin',
            ],

            [
                'name' => 'HouseDeals Buyer',
                'email' => 'buyer@housedeals.com',
                'password' => Hash::make('housedeals2021'),
                'user_code' => 'HD/'.rand(11000,99990),
                'role' => 'buyer',
            ],

            [
                'name' => 'HouseDeals Partner',
                'email' => 'partner@housedeals.com',
                'password' => Hash::make('housedeals2021'),
                'user_code' => 'HD/'.rand(11000,99990),
                'role' => 'partner',
            ],

        ]);
    }
}
