<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseCreateRequest;
use App\Http\Requests\RequestRentalHouseRequest;
use App\Models\House;
use App\Models\HouseImage;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function getAllHouses()
    {
        return DB::table('houses')->orderBy('created_at', 'desc')->paginate(10);
    }

    public function list()
    {
        $houses = $this->getAllHouses();
        return view('house.list-house', compact('houses'));
    }

    public function info($id)
    {
        $house = DB::table('houses')->find($id);
        return view('house.info-house', compact('house'));
    }

    public function create()
    {
        $roomTypes = DB::table('room_types')->get();
        return view('house.create-house', compact('roomTypes'));
    }

    public function store(HouseCreateRequest $request)
    {
        $house = new House();
        $house->owner_id = Auth::id();
        $house->name = $request->name;
        $house->room_type_id = $request->room_type_id;
        $house->address = $request->address;
        $house->numberBedRoom = $request->numberBedRoom;
        $house->numberBathRoom = $request->numberBathRoom;
        $house->desc = $request->desc;
        $house->status_id = 1;
        $house->pricePerDay = $request->pricePerDay;
        $house->save();

        if ($request->hasFile('images')){
            $count = 0;
            foreach($request->file('images') as $key => $file)
            {
                $image = new HouseImage();
                $image->house_id = $house->id;
                $image->src = $house->id . '_' . $count . '.' . $file->extension();
                $image->save();

                $file->storeAs('public/images', $image->src);
                $count++;
            }
        }else {
            $image = new HouseImage();
            $image->house_id = $house->id;
            $image->src = $house->id . '_' . time() . '.png';
            $image->save();

            $file = new UploadedFile(public_path('img/demo/property/floorplan.png'), 'floorplan.png');
            /*dd($file);*/

            $file->storeAs('public/images', $image->src);
        }

        return back()->withErrors([
            'success' => "Success"
        ]);
    }

}
