<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Servizi commerciali e finanziari',
            'Ingegneria e costruzione',
            'IT e telecomunicazioni',
            'Sviluppo software'
        ];

        foreach ($categories as $category) {
            $newCategory = Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}
