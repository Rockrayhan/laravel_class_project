<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Red Dead Remeption',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '1',
            'availibility' =>  '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Gojo Saturo',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '2',
            'availibility' =>  '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Sukhna Itadori',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '3',
            'availibility' =>  '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Master Tengan',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '1',
            'availibility' =>  '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Jujutsu Kaisen',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '2',
            'availibility' =>  '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Grand Theft Auto',
            'description' => ' This is Product Description Content ',
            'image' =>  'images/no_photo.jpg',
            'tags' =>  'no tag',
            'price' =>  '120',
            'category_id' =>  '3',
            'availibility' =>  '1',
        ]);
    }
}
