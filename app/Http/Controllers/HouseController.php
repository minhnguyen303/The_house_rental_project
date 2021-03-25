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
        return view('home', compact('houses'));
    }
}
