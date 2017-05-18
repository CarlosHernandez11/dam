<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10;$i++){
            DB::table('users')->insert([
                'nombre' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'username' => str_random(12)
            ]);
        }
    }
}
