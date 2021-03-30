<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostHouseController extends Controller
{
    public function getAllPost()
    {
        $houses = DB::table('houses')->where('owner_id',Auth::id())->get();
        return view('posts.listPost',compact('houses'));
    }

}
