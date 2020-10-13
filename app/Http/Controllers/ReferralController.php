<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function Wish_check($link_pub){ //Add Checker for Date
        $checker = DB::table('BDays')->where('share',$link_pub)->value('id');
        if($checker){
        $fname = DB::table('BDays')->where('share',$link_pub)->value('fname');
        $bday = DB::table('BDays')->where('share',$link_pub)->value('birthday');

        return view('wish', compact('fname','bday','link_pub',));
        }
        else{
        return "Nothing Found";
        }
    }

    public function Wish(Request $request){
        dd($request);
        $message=$request->Message;


    }



    public function View($link_pvt){
        dd($link_pvt);
    }




}
