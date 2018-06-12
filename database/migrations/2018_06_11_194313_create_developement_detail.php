<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopementDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_developement_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('volume_no');
            $table->string('plan_no');
            $table->integer('address')->unsigned();
            $table->foreign('address')->references('id')->on('tbl_address'); 
            $table->integer('dev_surveyor')->unsigned(); 
            $table->foreign('dev_surveyor')->references('id')->on('tbl_person_info');
            $table->integer('total_lots_i');
            $table->string('total_lots_s');
            $table->integer('residential_lots_i');
            $table->string('residential_lots_s');
            $table->integer('common_lots_i');
            $table->string('common_lots_s');
            $table->string('lot_ids');
            $table->integer('rsrv_road_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_developement_detail');
    }
}
