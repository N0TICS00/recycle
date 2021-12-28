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
        $retires->hour = request("hour");
        
        $retires->save();
        return back();
    }
    public function all(){
        $retires = User::all();
        return view("all", compact("retires"));
    }
}
