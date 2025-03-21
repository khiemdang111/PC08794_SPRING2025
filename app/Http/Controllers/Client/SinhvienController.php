<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhvienController extends Controller
{
    public function index()
    {
        $sinhviens = DB::table('sinhviens')
            ->leftJoin('khoas', 'sinhviens.khoa_id', '=', 'khoas.id')
            ->select('sinhviens.*', 'khoas.name as khoa_name')
            ->get();

        return view('client.sinhvien.list', compact('sinhviens'));
    }
}
