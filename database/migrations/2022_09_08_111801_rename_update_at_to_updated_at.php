<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class renameUpdateAtToUpdatedAt extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('member', function (Blueprint $table) {
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
		Schema::table('updated_at', function (Blueprint $table) {
			$table->renameColumn('updated_at', 'update_at');
			$table->renameColumn('deleted_at', 'delete_at');
		});
	}
};
