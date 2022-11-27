<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(FooterServicesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(LineClientsTableSeeder::class);
        $this->call(UsersTableSeeder::class); 
        $this->call(SpamsTableSeeder::class); 
    }
}
