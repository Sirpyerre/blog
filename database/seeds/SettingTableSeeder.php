<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'Larave\'s Blog',
        	'address' => 'Puebla, MX',
        	'contact_number' => '72000',
        	'contact_email' => 'info@monoforms.com'
        ]);
    }
}
