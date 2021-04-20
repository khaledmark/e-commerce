<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG',
            'price'=>'200',
            'category'=>'Mobile',
            'description'=>'A smart phone with 4G ram and so mush features',
            'gallery'=>'https://5.imimg.com/data5/IO/QJ/MY-24529291/lg-mobiles-500x500.png',
            ],
            [
                'name'=>'OPPO',
                'price'=>'500',
                'category'=>'Mobile',
                'description'=>'A smart phone with 8G ram and so mush features',
                'gallery'=>'https://5.imimg.com/data5/CZ/RS/ZT/SELLER-100534408/oppo-mobile-phones-f15-500x500.jpg',
                ],
                [
                    'name'=>'POCO X3',
                    'price'=>'200',
                    'category'=>'Mobile',
                    'description'=>'A smart phone with 8G ram 128G storage and so mush features',
                    'gallery'=>'https://mob4me.com/Assets/images/mobile/poco-x3-nfc-large.jpg',
                    ],
                    [
                        'name'=>'IPhone',
                        'price'=>'1000',
                        'category'=>'Mobile',
                        'description'=>'A smart phone with 16G ram 256G storage and so mush features',
                        'gallery'=>'https://cdn.dxomark.com/wp-content/uploads/2017/09/title-1.jpg',
                        ],
                        [
                            'name'=>'samsung',
                            'price'=>'800',
                            'category'=>'Mobile',
                            'description'=>'A smart phone with 6G ram and so mush features',
                            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/sg/sm-a125fzbhxsp/gallery/sg-galaxy-a12-a125-sm-a125fzbhxsp-thumb-363613148?$320_320_PNG$',
                            ]
        ]);
    }
}
