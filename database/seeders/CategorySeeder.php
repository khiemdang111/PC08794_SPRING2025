<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Trà Sữa',
                'description' => 'Các loại trà sữa thơm ngon, đa dạng topping.',
                'image' => 'images/categories/tra-sua.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cà Phê',
                'description' => 'Cà phê Việt Nam pha phin, rang xay nguyên chất.',
                'image' => 'images/categories/ca-phe.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nước Ép',
                'description' => 'Nước ép trái cây tươi, tốt cho sức khỏe.',
                'image' => 'images/categories/nuoc-ep.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sinh Tố',
                'description' => 'Sinh tố trái cây tươi, nguyên chất, bổ dưỡng.',
                'image' => 'images/categories/sinh-to.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nước Giải Khát',
                'description' => 'Đồ uống giải khát như soda, dừa tắc, trà chanh...',
                'image' => 'images/categories/nuoc-giai-khat.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
