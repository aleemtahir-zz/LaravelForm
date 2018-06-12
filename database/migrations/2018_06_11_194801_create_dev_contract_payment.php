<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevContractPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dev_contract_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foriegn_currency');
            $table->string('fc_symbol');
            $table->string('fc_exchange_rate');
            $table->integer('price_i');
            $table->string('price_w');
            $table->integer('j_price_i');
            $table->string('j_price_w');
            $table->integer('deposit');
            $table->integer('second_payment');
            $table->integer('third_payment');
            $table->integer('fourth_payment');
            $table->integer('final_payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_dev_contract_payment');
    }
}
