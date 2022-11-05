<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\category;
use App\Models\estate;
use App\Models\image;
use App\Models\mark;
use App\Models\modelo;
use App\Models\municipality;
use App\Models\product;
use App\Models\sale;
use App\Models\sales_detail;
use App\Models\typeuser;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        estate::factory(10)->create();
        User::factory(10)->create();

        mark::factory(10)->create();
        modelo::factory(10)->create();
        category::factory(10)->create();
        product::factory(10)->create();
        
        municipality::factory(10)->create();
        sale::factory(10)->create();
        sales_detail::factory(10)->create();
        image::factory(10)->create();
        typeuser::factory(10)->create();

    }
}
