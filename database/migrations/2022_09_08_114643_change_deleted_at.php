<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('content', function (Blueprint $table) {
			$table->datetime('deleted_at')->nullable()->change();
		});
		Schema::table('member', function (Blueprint $table) {
			$table->datetime('deleted_at')->nullable()->change();
		});
		Schema::table('review', function (Blueprint $table) {
			$table->datetime('deleted_at')->nullable()->change();
		});
		Schema::table('content_review', function (Blueprint $table) {
			$table->datetime('deleted_at')->nullable()->change();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
};
