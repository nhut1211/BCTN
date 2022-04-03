<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLoaiphongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_loaiphong', function (Blueprint $table) {
            $table-> increments('id_loaiphong');
            $table-> string('stt');
            $table-> string('loai_phong');
            $table-> string('mo_ta');
            $table-> string('gia_phong');
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
        Schema::dropIfExists('tbl_loaiphong');
    }
}
