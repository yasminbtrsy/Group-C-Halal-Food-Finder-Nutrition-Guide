<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            // Beverages
            ['name' => 'Milo', 'company' => 'Nestle Malaysia', 'category' => 'Beverages', 'status' => 'Certified Halal'],
            ['name' => 'Vitagen', 'company' => 'Malaysia Milk Sdn. Bhd.', 'category' => 'Beverages', 'status' => 'Certified Halal'],
            ['name' => 'Pepsi', 'company' => 'PepsiCo Malaysia', 'category' => 'Beverages', 'status' => 'Certified Halal'],
            ['name' => 'Coca-Cola', 'company' => 'Coca-Cola Malaysia', 'category' => 'Beverages', 'status' => 'Certified Halal'],

            // Cosmetics & Personal Care
            ['name' => 'Johnson’s Baby Lotion', 'company' => 'Johnson & Johnson', 'category' => 'Cosmetics & Personal Care', 'status' => 'Certified Halal'],
            ['name' => 'Vaseline Petroleum Jelly', 'company' => 'Unilever Malaysia', 'category' => 'Cosmetics & Personal Care', 'status' => 'Certified Halal'],
            ['name' => 'Nivea Cream', 'company' => 'Beiersdorf Malaysia', 'category' => 'Cosmetics & Personal Care', 'status' => 'Certified Halal'],
            ['name' => 'Dettol Soap', 'company' => 'Reckitt Malaysia', 'category' => 'Cosmetics & Personal Care', 'status' => 'Certified Halal'],

            // Food
            ['name' => 'Maggi Noodles', 'company' => 'Nestle Malaysia', 'category' => 'Food', 'status' => 'Certified Halal'],
            ['name' => 'Gardenia Bread', 'company' => 'Gardenia Bakeries', 'category' => 'Food', 'status' => 'Certified Halal'],
            ['name' => 'Ayamas Chicken Sausages', 'company' => 'Ayamas Food Corporation', 'category' => 'Food', 'status' => 'Certified Halal'],
            ['name' => 'Farm Fresh Milk', 'company' => 'Farm Fresh Malaysia', 'category' => 'Food', 'status' => 'Certified Halal'],

            // Nutritional & Dietary Supplements
            ['name' => 'Blackmores Multivitamins', 'company' => 'Blackmores Malaysia', 'category' => 'Nutritional & Dietary Supplements', 'status' => 'Certified Halal'],
            ['name' => 'Ensure Gold Powder', 'company' => 'Abbott Malaysia', 'category' => 'Nutritional & Dietary Supplements', 'status' => 'Certified Halal'],
            ['name' => 'Centrum Multivitamin', 'company' => 'Pfizer Malaysia', 'category' => 'Nutritional & Dietary Supplements', 'status' => 'Certified Halal'],
            ['name' => 'Herbalife Shake', 'company' => 'Herbalife Malaysia', 'category' => 'Nutritional & Dietary Supplements', 'status' => 'Certified Halal'],

            // Pharmaceuticals
            ['name' => 'Panadol', 'company' => 'GlaxoSmithKline (GSK)', 'category' => 'Pharmaceuticals', 'status' => 'Certified Halal'],
            ['name' => 'Paracetamol 500mg', 'company' => 'Pharmaniaga', 'category' => 'Pharmaceuticals', 'status' => 'Certified Halal'],
            ['name' => 'Vitamin C 1000mg', 'company' => 'Blackmores Malaysia', 'category' => 'Pharmaceuticals', 'status' => 'Certified Halal'],
            ['name' => 'Scott’s Emulsion', 'company' => 'GlaxoSmithKline (GSK)', 'category' => 'Pharmaceuticals', 'status' => 'Certified Halal'],
        ]);
    }
}
