<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Trà Sữa Trân Châu',
                'description' => 'Trà sữa truyền thống với trân châu dai ngon.',
                'content' => 'Thành phần: Trà đen, sữa, đường, trân châu...',
                'price' => 40000,
                'sale_price' => 35000,
                'thumbnail' => 'images/tra-sua-tran-chau.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Cà Phê Sữa Đá',
                'description' => 'Cà phê Việt Nam pha phin, đậm đà với sữa đặc.',
                'content' => 'Thành phần: Cà phê phin, sữa đặc, đá...',
                'price' => 30000,
                'sale_price' => 28000,
                'thumbnail' => 'images/ca-phe-sua-da.jpg',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Nước Cam Ép',
                'description' => 'Nước cam tươi nguyên chất, không chất bảo quản.',
                'content' => 'Thành phần: Cam tươi ép nguyên chất...',
                'price' => 35000,
                'sale_price' => 32000,
                'thumbnail' => 'images/nuoc-cam-ep.jpg',
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Trà Chanh Mật Ong',
                'description' => 'Trà xanh kết hợp chanh và mật ong thơm ngon.',
                'content' => 'Thành phần: Trà xanh, chanh, mật ong...',
                'price' => 25000,
                'sale_price' => 22000,
                'thumbnail' => 'images/tra-chanh-mat-ong.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Sinh Tố Bơ',
                'description' => 'Sinh tố bơ thơm ngon, béo ngậy, bổ dưỡng.',
                'content' => 'Thành phần: Bơ, sữa đặc, đá...',
                'price' => 45000,
                'sale_price' => 40000,
                'thumbnail' => 'images/sinh-to-bo.jpg',
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soda Chanh',
                'description' => 'Soda kết hợp chanh tươi, mát lạnh sảng khoái.',
                'content' => 'Thành phần: Soda, chanh, đường...',
                'price' => 30000,
                'sale_price' => 27000,
                'thumbnail' => 'images/soda-chanh.jpg',
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Matcha Đá Xay',
                'description' => 'Matcha Nhật Bản xay nhuyễn với sữa.',
                'content' => 'Thành phần: Bột matcha, sữa, đá...',
                'price' => 50000,
                'sale_price' => 45000,
                'thumbnail' => 'images/matcha-da-xay.jpg',
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Dừa Tắc',
                'description' => 'Nước dừa kết hợp tắc thơm ngon, giải nhiệt.',
                'content' => 'Thành phần: Nước dừa, tắc, đường...',
                'price' => 35000,
                'sale_price' => 30000,
                'thumbnail' => 'images/dua-tac.jpg',
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
