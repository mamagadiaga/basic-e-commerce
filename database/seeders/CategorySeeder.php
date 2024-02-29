<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Catégorie 1']);
        Category::create(['name' => 'Catégorie 2']);
        Category::create(['name' => 'Catégorie 3']);

    }
}
