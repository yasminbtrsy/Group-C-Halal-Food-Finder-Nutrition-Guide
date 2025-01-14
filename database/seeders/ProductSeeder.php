<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Milo', 'company' => 'Nestle Malaysia', 'category' => 'Beverages', 'status' => 'Certified Halal'],
            ['name' => 'Johnson’s Baby Lotion', 'company' => 'Johnson & Johnson', 'category' => 'Cosmetics & Personal Care', 'status' => 'Certified Halal'],
            ['name' => 'Maggi Noodles', 'company' => 'Nestle Malaysia', 'category' => 'Food', 'status' => 'Certified Halal'],
            ['name' => 'Blackmores Multivitamins', 'company' => 'Blackmores Malaysia', 'category' => 'Nutritional & Dietary Supplements', 'status' => 'Certified Halal'],
            ['name' => 'Panadol', 'company' => 'GSK', 'category' => 'Pharmaceuticals', 'status' => 'Certified Halal'],
        ]);
    }
}
