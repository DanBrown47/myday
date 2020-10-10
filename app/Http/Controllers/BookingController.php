<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
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

        $data = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone,'birthday'=>$bday, 'timestamp'=>$now);
        DB::table('BDays')->insert($data);
        return "Updated";
    }
}
