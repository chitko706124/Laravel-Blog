<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['category' => 'Javascript']);
        Category::create(['category' => 'Tailwind']);
        Category::create(['category' => 'Bootstrap']);
        Category::create(['category' => 'Php']);
        Category::create(['category' => 'Laravel']);

        // Add more categories as needed
    }
}
