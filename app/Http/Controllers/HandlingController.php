<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HandlingController extends Controller
{
    public function redirectAdd(){
        return view("add");
    }

    public function addRetire(){
        $retires = new User();
        $retires->material = request("material");
        $retires->day = request("day");
        $retires->hour_start = request("hour-start");
        $retires->hour_end = request("hour-end");
        $retires->save();
        return back();
    }
    public function deleteRetire(\Illuminate\Http\Request $request){
        $deleteRequest = $request->get("id");
        die(var_dump($deleteRequest));
        $retire = User::find($deleteRequest);
        $retire->delete();
      
    }
    public function all(){
        $retires = User::all();
        return view("all", compact("retires"));
    }
    
}
