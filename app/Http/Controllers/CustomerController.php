<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function jokiTranscation (Request $request){
        dd($request);
        $validate =  $request->validate([
            'login-akun-via' => 'required',
            'email-notelp-akun'=> 'required',
            'password' => 'required',
            'nickname' => 'required',
            'req-hero' => 'required',
            'keterangan' => 'required',
            'whatsapp' => 'required'
        ]);

        $joki = new Joki ();
        $joki->create($validate);
    
        $transaksi = new Transaksi();
        $transaksi->create($validate);

        return redirect()->route('/');
    }

    public function topUpTranscation (Request $request){
        $validate =  $request->validate([
            'produk_id' => 'required',
            'id-user-akun' => 'required',
            'nickname' => 'required',
            'whatsapp' => 'required'
        ]);

        $topUp = new TopUp();
        $topUp->create($validate);

        $transaksi = new Transaksi();
        $transaksi->create($validate);

        return redirect('/'); 
    }
}
