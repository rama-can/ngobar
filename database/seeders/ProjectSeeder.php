<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Mobile App',
            'slug' => 'mobile-app',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatibus consectetur ipsa itaque culpa. Quod nulla doloribus hic necessitatibus illum!',
            'categories' => 'Laravel',
            'image' => 'project.jpg'
        ]);

        Project::create([
            'name' => 'Web App',
            'slug' => 'web-app',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatibus consectetur ipsa itaque culpa. Quod nulla doloribus hic necessitatibus illum!',
            'categories' => 'Laravel',
            'image' => 'project.jpg'
        ]);

        Project::create([
            'name' => 'Desktop App',
            'slug' => 'desktop-app',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatibus consectetur ipsa itaque culpa. Quod nulla doloribus hic necessitatibus illum!',
            'categories' => 'Laravel',
            'image' => 'project.jpg'
        ]);
    }
}
