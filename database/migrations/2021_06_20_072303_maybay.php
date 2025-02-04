<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maybay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maybay', function (Blueprint $maybay) {
            $maybay->increments('idMayBay');
            $maybay->string('nameMayBay', 50);
            $maybay->string('hangMayBay', 50);
            $maybay->text('anh');
            $maybay->text('gioiThieuHang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maybay');
    }
}
