<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Carbon\Carbon;





class BookingController extends Controller
{
    public function Register(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $bday  = $request->bday;
        $now = Carbon::now()->toDateTimeString();
        $link_pub = $fname.'_'.mt_rand(1000,9999);
        $link_pvt = $fname.'_'.mt_rand(1000000,9999999);
        $data = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone,'birthday'=>$bday, 'timestamp'=>$now, 'share'=>$link_pub, 'view'=>$link_pvt);
        DB::table('BDays')->insert($data);
        return view('links', compact('fname','bday','link_pub','link_pvt'));

    }
}
