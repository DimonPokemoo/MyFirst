<?php

use App\Models\User;
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
        User::create([
            'name' => 'Dimon Admin',
            'email' => 'TryndoKhir@gmail.com',
            'password' => bcrypt('123456'),
            'role' => User::ROLE_ADMIN,
            'phone' => '0673433646',
            'remember_token' => str_random(20)
        ]);
        User::create([
            'name' => 'Taras Bashuryn',
            'email' => 'TarasB@gmail.com',
            'password' => bcrypt('654321'),
            'role' => User::ROLE_MANAGER,
            'phone' => '0973423454',
            'remember_token' => str_random(20)
        ]);
        User::create([
            'name' => 'Vlad Grashchenkov',
            'email' => 'VLGrash@gmail.com',
            'password' => bcrypt('543675'),
            'role' => User::ROLE_MANAGER,
            'phone' => '0995863234',
            'remember_token' => str_random(20)
        ]);
        factory(User::class,5)->create();
    }
}
