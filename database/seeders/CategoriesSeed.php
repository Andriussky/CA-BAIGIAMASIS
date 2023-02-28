<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Books',
                'image' => '/img/categories/category-2.jpg',
            ],
            [
                'name' => 'Magazines',
                'slug' => 'magazines',
                'description' => 'Magazines',
                'image' => '/img/categories/category-3.jpg',
            ],
            [
                'name' => 'Comics',
                'slug' => 'comics',
                'description' => 'Comics',
                'image' => '/img/categories/category-4.jpg',
            ],
        ];
        foreach ($categories as $cat) {
            Category::updateOrCreate(
                [
                    'name' => $cat['name'],
                    'slug' => $cat['slug'],
                ],
                [
                    'description' => $cat['description'],
                    'image' => $cat['image'],
                    'status_id' => Status::where(['name' => 'active', 'type' => 'shelf_content'])->first()->id,
                    'parent_id' => null,
                ]
            );

        }
    }
}
