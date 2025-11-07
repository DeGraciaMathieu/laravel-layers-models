<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Feature\Infrastructure\EloquentItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        EloquentItem::factory()->count(10)->create();
    }
}
