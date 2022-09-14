<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('comment')->nullable();
            $table->integer('score')->nullable();
            $table->bigInteger('member_id');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->datetime('deleted_at');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};