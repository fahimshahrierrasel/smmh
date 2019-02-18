<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $samsung = new Brand;
        $samsung->name = 'Samsung';
        $samsung->save();

        $xiaomi = new Brand;
        $xiaomi->name = 'Xiaomi';
        $xiaomi->save();
    }
}
