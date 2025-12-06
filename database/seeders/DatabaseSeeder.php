<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@task1.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create regular users
        User::create([
            'name' => 'Karan',
            'email' => 'karan@task1.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Create categories
        $category1 = Category::create(['name' => 'Category 1']);
        $category2 = Category::create(['name' => 'Category 2']);
        $subcategory1 = Category::create(['name' => 'Category 1-1', 'parent_id' => $category1->id]);
        $subcategory2 = Category::create(['name' => 'Category 1-2', 'parent_id' => $category1->id]);
        $subcategory3 = Category::create(['name' => 'Category 2-1', 'parent_id' => $category2->id]);
        $subcategory4 = Category::create(['name' => 'Category 2-2', 'parent_id' => $category2->id]);
    }
}
