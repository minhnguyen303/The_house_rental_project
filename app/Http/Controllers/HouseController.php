<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function getAllHouses()
    {
        return House::all();
    }

    public function index()
    {
        $houses = $this->getAllHouses();
        return view('house.list-house', compact('houses'));
    }

    public function info($id)
    {
        $house = DB::table('houses')->find($id);
        return view('house.info-house', compact('house'));
    }
}
