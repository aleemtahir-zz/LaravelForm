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
            $table->integer('dev_officer1')->unsigned()->nullable(); 
            $table->foreign('dev_officer1')->references('id')->on('tbl_person_info'); 
            $table->integer('dev_officer2')->unsigned()->nullable();
            $table->foreign('dev_officer2')->references('id')->on('tbl_person_info'); 
            $table->string('mobile')->nullable(); 
            $table->string('email')->nullable();
            $table->integer('office_address')->unsigned()->nullable();
            $table->foreign('office_address')->references('id')->on('tbl_address'); 
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
