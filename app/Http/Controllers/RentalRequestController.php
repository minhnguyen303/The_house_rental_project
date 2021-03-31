<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRentalHouseRequest;
use App\Models\RentalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RentalRequestController extends Controller
{
    public function list()
    {
        $rentalRequests = DB::table('rental_requests')->where('owner_house_id', Auth::id())->get();
        return view('user.rental_request', compact('rentalRequests'));
    }

    public function myList()
    {
        $rentalRequests = DB::table('rental_requests')->where('request_user_id', Auth::id())->get();
        return view('user.rental_request', compact('rentalRequests'));
    }

    public function create($houseId, RequestRentalHouseRequest $request)
    {
        $house = DB::table('houses')->find($houseId);
        $rentalRequest = new RentalRequest();
        $rentalRequest->request_user_id = Auth::id();
        $rentalRequest->owner_house_id = $house->owner_id;
        $rentalRequest->house_id = $houseId;
        $rentalRequest->startDate = $request->rentalStartDate;
        $rentalRequest->endDate = $request->rentalEndDate;
        $rentalRequest->status_id = 1;
        $rentalRequest->save();

        return back();
    }

    public function update(Request $request)
    {

    }
}
