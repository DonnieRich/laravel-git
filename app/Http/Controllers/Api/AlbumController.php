<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'results' => "APIs are working"
        ]);
    }

}
