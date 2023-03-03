<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;

use function GuzzleHttp\Promise\all;

class MytoursController extends Controller
{
    public function mytours (){
        $user_tours= auth()->user()->tours;
    return view('tours.mytours' , compact('user_tours')) ;

    }
    public function update($tour_id){
        $user_id = request()->validate([
            'user_id' => 'required'
        ]);

        Tour::whereId($tour_id)->update($user_id);
        return back();
    }
}
