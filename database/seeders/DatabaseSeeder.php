<?php

namespace Database\Seeders;

use Carbon\Factory;
use App\Models\Model\Product;
use App\Models\Model\Admin;
use App\Models\Model\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(10)->create();

        \App\Models\Product::factory(100)->create();

        \App\Models\Review::factory(200)->create();

        //  \App\Models\Admin::factory()->create();
        
    }
}
