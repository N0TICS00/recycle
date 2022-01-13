<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
class HandlingController extends Controller
{
    public function add(){
        return view("add");
    }

    public function addRetire(Request $request){
        $withdrawals = new Withdrawal();
        $withdrawals->material = request("material");
        $withdrawals->day = request("day");
        $withdrawals->hour_start = request("hour-start");
        $withdrawals->hour_end = request("hour-end");
        $withdrawals->save();
        return redirect()->route("/")->with('status' , "Withdrawal added succesfully");
        
    }
    public function deleteRetire($id){
        Withdrawal::where("id", $id)->delete();
        return back();
      
    }
    public function all(){
        $withdrawals = Withdrawal::all();
        return view("all", compact("withdrawals"));
    }
    public function addedRetire(){
        return view("added");
    }
    public function redirect(Request $request){
        
    }
}
