<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function(Blueprint $table){
            $table->bigIncrements('review_id');
            $table->string('view_comment');
            $table->string('review_comment');
            $table->integer('review_score');
            $table->bigInteger('member_id');
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
        Schema::dropIfExists('review');
    }
};