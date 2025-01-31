<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class InfoController extends Controller
{
    public function info():JsonResponse {
        return response()->json([
            'email' =>'chenwieddy@gmail.com',
            'current_datetime' => now()->toISOString(),
            'github_url'=>'https://github.com/Edna112/public_api',
        ]);
    }
}
