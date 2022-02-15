<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Para crear los datos de prueba
        App\User::create([
            'name'=> 'Jennifer Intriago',
            'email' => 'jintriago@admin.com',
            'password' => bcrypt('123456')
        ]);
        factory(App\Post::class, 24)->create();
    }
}
