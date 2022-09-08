<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function(Blueprint $table){
            $table->bigIncrements('contents_id');
            $table->string('shop_name');
            $table->string('shop_description');
            $table->string('shop_postcode');
            $table->string('shop_adress');
            $table->string('shop_price_lunch');
            $table->string('shop_price_dinner');
            $table->string('shop_nearest_st');
            $table->string('shop_nearest_time');
            $table->bigInteger('member_id');
            $table->integer('prefecture_code');
            $table->datetime('created_at');
            $table->datetime('update_at');
            $table->datetime('delete_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotent');
    }
};
