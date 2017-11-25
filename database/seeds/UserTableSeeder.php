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
        $user = App\User::create([
        	'name' => 'Peter',
        	'email' => 'peter@monoforms.com',
        	'password' => bcrypt('asd123'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/AEA2017-0001_2017-10-041.png',
            'about' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. In auctor dui congue, imperdiet nibh a, tincidunt odio.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
