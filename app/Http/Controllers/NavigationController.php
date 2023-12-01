<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function topUpView ($data){
        $data = new ProductController ();
        $packet = $data -> index();

        return view('topup', ['packet' =>  $packet]);
        
    }
}
