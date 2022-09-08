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
			$table->renameColumn('update_at', 'updated_at');
			$table->renameColumn('delete_at', 'deleted_at');
		});
		Schema::table('review', function (Blueprint $table) {
			$table->renameColumn('update_at', 'updated_at');
			$table->renameColumn('delete_at', 'deleted_at');
		});
		Schema::table('content_review', function (Blueprint $table) {
			$table->renameColumn('update_at', 'updated_at');
			$table->renameColumn('delete_at', 'deleted_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('content', function (Blueprint $table) {
			$table->renameColumn('updated_at', 'update_at');
			$table->renameColumn('deleted_at', 'delete_at');
		});
		Schema::table('review', function (Blueprint $table) {
			$table->renameColumn('updated_at', 'update_at');
			$table->renameColumn('deleted_at', 'delete_at');
		});
		Schema::table('content_review', function (Blueprint $table) {
			$table->renameColumn('updated_at', 'update_at');
			$table->renameColumn('deleted_at', 'delete_at');
		});
	}
};
