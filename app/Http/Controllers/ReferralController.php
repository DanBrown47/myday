<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function View($link_pvt){
        dd($link_pvt);
    }

    public function Wish($link_pub){
        dd($link_pub);
    }
}
