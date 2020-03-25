<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product_name' => 't-shirt',
            'product_detail' => '半袖',
            'price' => '1500',
            'imgpath' => 'tshirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('products')->insert([
            'product_name' => 't-shirt',
            'product_detail' => '長袖',
            'price' => '2500',
            'imgpath' => 'tshirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 't-shirt',
            'product_detail' => '半袖,白',
            'price' => '1500',
            'imgpath' => 'tshirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 't-shirt',
            'product_detail' => '半袖,黒',
            'price' => '1500',
            'imgpath' => 'tshirt.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'bottom',
            'product_detail' => 'ジーンズ',
            'price' => '7000',
            'imgpath' => 'bottom.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'shoes',
            'product_detail' => 'ナイキスニーカー',
            'price' => '1000',
            'imgpath' => 'nike.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'shose',
            'product_detail' => 'アディダススニーカー',
            'price' => '10000',
            'imgpath' => 'adidas.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'shose',
            'product_detail' => 'アシックススニーカー',
            'price' => '9000',
            'imgpath' => 'asixs.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'bag',
            'product_detail' => 'リュック',
            'price' => '8000',
            'imgpath' => 'bag.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);DB::table('products')->insert([
            'product_name' => 'cap',
            'product_detail' => '野球帽',
            'price' => '5000',
            'imgpath' => 'cap.img',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
