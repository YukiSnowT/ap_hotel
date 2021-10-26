<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select("select * from user");
        return view("hotel.index",["items" => $items]);
    }
}
