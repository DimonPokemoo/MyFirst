<?php

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
           'name' => 'Rozetka',
           'address' => 'Kyiv Khreschatyk 24',
            'phone' => '554560'
        ]);
        Store::create([
           'name' => 'Citrus',
           'address' => 'Lviv Gorodoctka 14',
           'phone' => '554520',
        ]);
        Store::create([
           'name' => 'Allo',
           'address' => 'Ternopil Shevchenka 43',
           'phone' => '554020'
        ]);
    }
}
