<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HandlingController extends Controller
{
    public function redirectAdd(){
        return view("add");
    }
    public function index(){
        $retires = User::all();
        return view("welcome", compact("retires"));
    }
    public function addRetire(){
        $retires = new User();
        $retires->material = request("material");
        $retires->day = request("day");
        $retires->hour = request("hour");
        $retires->save();
        return back();
    }
}
