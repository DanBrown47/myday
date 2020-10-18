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
        return view('wish', compact('fname','bday','link_pub'));
        }
        else{
        return "Nothing Found";
        }
    }

    public function Wish(Request $request){
        $name=$request->name;
        $link_pub=$request->link_pub;
        $link_pvt = DB::table('BDays')->where('share',$link_pub)->value('view');
        if($request->default_message){
            $Message=$request->default_message;
        }
        else{
            $Message=$request->custom_message;
        }
        $data = array('name'=>$name,'share'=>$link_pub,'view'=>$link_pvt,'Message'=>$Message);
        DB::table('MsdDB')->insert($data);
        return "Thank you !";

    }

    public function View($link_pvt){

        $user_all_msgs = DB::table('MsdDB')
        ->select(DB::raw('name, Message'))
        ->where('view',$link_pvt)
        ->get();

        return view('view', compact('user_all_msgs'));
    }




}
