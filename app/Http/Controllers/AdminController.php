<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\rooms;
use App\Models\booking;
use App\Models\complains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            
            if($usertype == 'user')
            {
                $rooms_list = rooms::all();
                return view('dashboard', ['rooms' => $rooms_list]);
            }
            elseif($usertype == 'admin')
            {
                $rooms_list = rooms::all();
                $bookings = booking::all();
                // return view('admin.index', ['books' => $bookings]);
                return view('admin.index', ['rooms' => $rooms_list], ['books' => $bookings]);
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    function home(){
        $rooms_list = rooms::all();
        return view('index', ['rooms' => $rooms_list]);
    }

    function add_rooms(){
        return view('admin.add_rooms');
    }
    
    function save_rooms(Request $request){

        $data = new rooms;
        $data->room_title = $request->room_title; 
        $data->room_price = $request->room_price;
        $data->room_desc = $request->room_desc;
        $image = $request->room_img;
        if($image){
            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->room_img->move('room_img', $imagename);
            $data->room_img = $imagename;
        }

        $data->save();
 
        return redirect(route('add-rooms'))->with('status', "Room Add Successfully.");
    }

    function rooms_list(){
        $rooms_list = rooms::all();
        return view('admin.view_rooms', ['rooms' => $rooms_list]);
    }

    function complains_list(){
        $complains = complains::all();
        return view('admin.complains', ['complains' => $complains]);
    }

    function edit($id){
        $data = rooms::find($id);
        return view('admin.edit_rooms', compact('data'));
    }

    function update(Request $request, $room){
        $room_data = rooms::find($room);
        $room_data->room_title = $request->room_title; 
        $room_data->room_price = $request->room_price;
        $room_data->room_desc = $request->room_desc;
        $image = $request->room_img;
        if($image){
            $imagename = time(). '.' . $image->getClientOriginalExtension();
            $request->room_img->move('room_img', $imagename);
            $room_data->room_img = $imagename;
        }

        $room_data->save();
        
        return redirect(route('rooms-list'))->with('update_status', "Room update successfully.");
    }

    function remove($id){
        $data = rooms::find($id);
        $data->delete();
        return redirect(route('rooms-list'))->with('delete_status', "Room delete successfully.");
    }
}
