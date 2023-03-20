<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatussesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'new', 'type' => 'order'],
            ['name' => 'in_progress', 'type' => 'order'],
            ['name' => 'confirmed', 'type' => 'order'],
            ['name' => 'canceled', 'type' => 'order'],
            ['name' => 'done', 'type' => 'order'],

//            ['name' => 'new', 'type' => 'payment'],
//            ['name' => 'in_progress', 'type' => 'payment'],
//            ['name' => 'confirmed', 'type' => 'payment'],
//            ['name' => 'canceled', 'type' => 'payment'],
//            ['name' => 'done', 'type' => 'payment'],

            ['name' => 'active', 'type' => 'user'],
            ['name' => 'inactive', 'type' => 'user'],
            ['name' => 'blocked', 'type' => 'user'],
            ['name' => 'deleted', 'type' => 'user'],

            ['name' => 'active', 'type' => 'shelf_content'],
            ['name' => 'inactive', 'type' => 'shelf_content'],
            ['name' => 'deleted', 'type' => 'shelf_content'],

            ['name' => 'active', 'type' => 'category'],
            ['name' => 'inactive', 'type' => 'category'],
            ['name' => 'deleted', 'type' => 'category']
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate($status);
        }
    }
}
