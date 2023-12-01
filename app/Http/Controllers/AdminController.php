<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function reportTopUp (){
        $result =  Transaksi::select('transaksis.*', 'top_ups.*')
        ->join('top_ups','',)
    }
}
