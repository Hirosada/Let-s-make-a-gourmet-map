<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('postcode');
            $table->string('address');
            $table->string('price_lunch');
            $table->string('price_dinner');
            $table->string('station');
            $table->string('walktime');
            $table->bigInteger('member_id');
            $table->integer('prefecture_code');
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
        Schema::dropIfExists('posts');
    }
};
