<?php

namespace App\Http\Controllers;

use App\Models\Product;

abstract class Controller
{
    public function apiSuccessReponse($msg, $data, $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $msg,
            'data' => $data
        ], $code);
    }
    /**
     * Phường thức API trả về với trạng thái data bằng false
     * @param string $msg
     */
    public function apiErrorReponse($msg, $data, $code = 500)
    {
        return response()->json([
            'status' => false,
            'message' => $msg,
            'data' => $data
        ], $code);
    }
}
