<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'description' => 'Samsung Brand',
            ],
            [
                'name' => 'Apple iPhone 12',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'description' => 'Apple Brand',
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'description' => 'Google Pixel Brand',
            ],
            [
                'name' => 'LG V10 H800',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'description' => 'LG Brand',
            ]
        ];

        foreach ($products as $key => $value) {
            Brand::create($value);
        }
    }
}
