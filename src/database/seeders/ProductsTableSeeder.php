<?php

namespace Database\Seeders;

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
    $param = [
      'name' => 'りんご',
      'price' => 500,
      'content' => 'apple'
    ];
    DB::table('products')->insert($param);
    $param = [
      'name' => 'メロン',
      'price' => 1200,
      'content' => 'melon'
    ];
    DB::table('prpducts')->insert($param);
    $param = [
      'name' => 'さくらんぼ',
      'price' => 900,
      'content' => 'cherry'
    ];
    DB::table('products')->insert($param);
    $param = [
      'name' => 'すもも',
      'price' => 600,
      'content' => 'plum'
    ];
    DB::table('products')->insert($param);    
    }
}
