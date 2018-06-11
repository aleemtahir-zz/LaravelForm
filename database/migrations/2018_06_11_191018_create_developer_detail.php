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
            $table->string('company_name'); 
            $table->integer('dev_officer1')->unsigned(); 
            $table->foreign('dev_officer1')->references('id')->on('tbl_person_info'); 
            $table->integer('dev_officer2')->unsigned();
            $table->foreign('dev_officer2')->references('id')->on('tbl_person_info'); 
            $table->string('capacity1'); 
            $table->string('capacity2'); 
            $table->string('landline1'); 
            $table->string('landline2'); 
            $table->string('mobile'); 
            $table->string('email'); 
            $table->integer('office_address')->unsigned();
            $table->foreign('office_address')->references('id')->on('tbl_address'); 
            $table->string('logo'); 
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
