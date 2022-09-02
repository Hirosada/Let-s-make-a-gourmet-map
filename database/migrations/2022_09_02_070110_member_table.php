<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function(Blueprint $table){
            $table->bigIncrements('member_id');
            $table->string('member_name');
            $table->string('member_email');
            $table->string('member_password');
            $table->string('member_phone');
            $table->string('member_postcode');
            $table->string('member_adress');
            $table->string('member_gender');
            $table->string('member_profile');
            $table->integer('prefecture_code');
            $table->integer('admin_flag');
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
        Schema::dropIfExists('member');
    }
};
