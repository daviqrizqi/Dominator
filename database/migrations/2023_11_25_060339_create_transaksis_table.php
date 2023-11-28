<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user-id');
            $table->unsignedBigInteger('paket-id');
            $table->unsignedBigInteger('metode-pembayaran-id');
            $table->unsignedBigInteger('paket-pembelian-id');
            $table->string('tipe-transaksi');
            $table->string('bukti-pembayaran');
            $table->integer('total-pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
