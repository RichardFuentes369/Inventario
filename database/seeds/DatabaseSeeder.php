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
        $this->call(CompanySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProviderSeeder::class);        
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
