<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SinhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $khoaIds = DB::table('khoas')->pluck('id'); // Lấy danh sách ID từ bảng khoas

        for ($i = 1; $i <= 10; $i++) {
            DB::table('sinhviens')->insert([
                'name' => 'Sinh viên ' . $i,
                'code' => rand(1000, 9999),
                'email' => Str::random(5) . '@example.com',
                'khoa_id' => $khoaIds->random(), // Lấy ngẫu nhiên một khoa_id
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
