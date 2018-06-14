<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_developer_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->integer('officer_id_1')->unsigned()->nullable(); 
            $table->foreign('officer_id_1')->references('id')->on('tbl_person_info'); 
            $table->integer('officer_id_2')->unsigned()->nullable();
            $table->foreign('officer_id_2')->references('id')->on('tbl_person_info'); 
            $table->string('mobile')->nullable(); 
            $table->string('email')->nullable();
            $table->integer('address_id')->unsigned()->nullable();
            $table->foreign('address_id')->references('id')->on('tbl_address'); 
            $table->string('logo')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_developer_detail');
    }
}
