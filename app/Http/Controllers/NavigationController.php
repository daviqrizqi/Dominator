<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PembayaranController;

class NavigationController extends Controller
{
    public function topUpView (){
        $data = new ProductController ();
        $packet = $data->index();

        $pembayaran = new PembayaranController();
        $metode =  $pembayaran->get();

        

        return view('topup', ['packet' =>  $packet, 'metode' =>  $metode]);
        
    }
}
