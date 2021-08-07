<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('categories')->truncate();


        //seeding the data

        User::factory()->count(1)->create();

        Category::factory()->count(10)->create()->each(function($category){
            $category->products()->save(Product::factory(Product::class)->count(5)->create());
        });

        // \App\Models\User::factory(10)->create();
    }
}
