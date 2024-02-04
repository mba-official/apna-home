<?php

namespace App\Http\Controllers;

use App\Models\complains;
use App\Models\User;
use App\Models\rooms;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    function rooms($id){
    
        $rooms = Rooms::find($id);
        return view('room_single', compact('rooms'));
    }

    function book_rooms(Request $request, $id){
        if(Auth::check()){
        $request->validate([
            'room_user_name' => 'required|string',
            'room_user_email' => 'required|string',
            'room_sdate' => 'required|date',
            'room_edate' => 'required|date'
        ]);

        $data = new booking;
        $data->room_user_name = $request->room_user_name; 
        $data->room_user_email = $request->room_user_email; 
        $data->room_user_phonenumber = $request->room_user_phonenumber; 
        $data->room_number = "apna-home-0".$id;
        $data->room_title = $request->room_title;
        $data->room_sdate = $request->room_sdate;
        $data->room_edate = $request->room_edate;
        $data->room_price = $request->room_price;

        $data->save();
 
        return redirect(route('dashboard'))->with('book_status', 'Thank you for visiting. Your room book successfully. We will share your rooms details via email soon.');
        }
        else{
            return redirect()->back()->with('login_status', 'You need to login first.');
        }
    }

    function complains(Request $request){

        $data = new complains;
        $data->name = $request->name; 
        $data->email = $request->email;
        $data->message = $request->message;

        $data->save();
 
        return redirect(route('apna-home'));
    }


}
