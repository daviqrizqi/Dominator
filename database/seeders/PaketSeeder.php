<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket  = [
            [
                'nama' => '3 Diamonds',
                'harga' =>  1250,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '5 Diamonds',
                'harga' =>  1500,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '10 Diamonds',
                'harga' =>  2800,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '14 Diamonds',
                'harga' =>  3800,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '28 Diamonds',
                'harga' =>  7600,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '36 Diamonds',
                'harga' =>  9600,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '44 Diamonds',
                'harga' =>  11400,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '59 Diamonds',
                'harga' =>  15300,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '170 Diamonds',
                'harga' =>  43700,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '185 Diamonds',
                'harga' =>  47800,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '240 Diamonds',
                'harga' =>  61600,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '296 Diamonds',
                'harga' =>  79500,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '370 Diamonds',
                'harga' =>  89800,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '408 Diamonds',
                'harga' =>  104300,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '875 Diamonds',
                'harga' =>  218000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '1159 Diamonds',
                'harga' =>  291000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '1750 Diamonds',
                'harga' =>  436000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '2010 Diamonds',
                'harga' =>  474000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '2975 Diamonds',
                'harga' =>  715500,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '4830 Diamonds',
                'harga' =>  1142000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '6050 Diamonds',
                'harga' =>  1444000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => '9660 Diamonds',
                'harga' =>  2275000,
                'tipe' => 'topUp'
            ],
            [
                'nama' => 'GRAND MASTER',
                'harga' =>  4000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'EPIC',
                'harga' =>  5000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'LEGENDS',
                'harga' =>  6000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'MYTHIC',
                'harga' =>  11000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'HONOR',
                'harga' =>  14000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'GLORY',
                'harga' =>  18000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'IMMORTAL',
                'harga' =>  25000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'EPIC 10 STAR',
                'harga' =>  42000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'LEGENDS 10 STAR',
                'harga' =>  52000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'MYTHIC 10 STAR',
                'harga' =>  107000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'HONOR 10 STAR',
                'harga' =>  127000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'GLORY 10 STAR',
                'harga' =>  167000,
                'tipe' => 'joki'
            ],
            [
                'nama' => 'IMMORTAL 10 STAR',
                'harga' =>  237000,
                'tipe' => 'joki'
            ],
            
        ];

        foreach ($paket as $key) {
            Paket::create([
                'nama' => $key['nama'],
                'harga' => $key['harga'],
                'tipe' => $key['tipe'],
            ]);
        }
    }

}
