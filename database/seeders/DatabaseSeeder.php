<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Order;

use Database\Factories\UserFactory;
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

        //sedder
        //$this->call(UserSeeder::class);
        //$this->call(DirectionSeeder::class);
        //$this->call(CategorySeeder::class);
        //$this->call(BrandSeeder::class);

        //factory // usar el nombre de modelo
        /*Direction::factory(20)->create();
        User::factory(20)->create();
        Category::factory(6)->create();
        Brand::factory(20)->create();
        Product::factory(20)->create();
        Order::factory(20)->create();

        //seeder
        $this->call(Category_ProductSeeeder::class);
        $this->call(Order_ProductSeeeder::class);*/
        Brand::factory(20)->create();
        Product::factory(20)->create();

        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);

    }
}
