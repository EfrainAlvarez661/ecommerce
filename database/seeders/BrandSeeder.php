<?php

namespace Database\Seeders;

use App\Models\brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mycategory1= new brand();
        $mycategory1->name='apple';
        $mycategory1->save();
        brand::factory(10)->create();
    }
}
