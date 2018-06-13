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
            $table->string('name')->nullable();
            $table->string('volume_no')->nullable();
            $table->string('plan_no')->nullable();
            $table->integer('address')->unsigned()->nullable();
            $table->foreign('address')->references('id')->on('tbl_address'); 
            $table->integer('dev_surveyor')->unsigned()->nullable(); 
            $table->foreign('dev_surveyor')->references('id')->on('tbl_person_info');
            $table->integer('total_lots_i')->nullable();
            $table->string('total_lots_s')->nullable();
            $table->integer('residential_lots_i')->nullable();
            $table->string('residential_lots_s')->nullable();
            $table->integer('common_lots_i')->nullable();
            $table->string('common_lots_s')->nullable();
            $table->string('lot_ids')->nullable();
            $table->integer('rsrv_road_no')->nullable();
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
