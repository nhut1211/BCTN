<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKhachtroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khachtro', function (Blueprint $table) {
            $table-> increments('user_id');
            $table-> string('so_phong');
            $table-> string('ho_dem');
            $table-> string('ten_khachtro');
            $table-> string('so_cmnd');
            $table-> string('so_phone');
            $table-> string('que_quan');
            $table-> string('ho_khau');
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
        Schema::dropIfExists('tbl_khachtro');
    }
}
