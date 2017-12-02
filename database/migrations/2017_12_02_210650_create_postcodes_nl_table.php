<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostcodesNlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postcodes_nl', function(Blueprint $table)
		{
			$table->float('id', 10, 0)->primary();
			$table->string('postcode', 7)->nullable();
			$table->float('postcode_id', 10, 0)->nullable();
			$table->float('pnum', 10, 0)->nullable();
			$table->string('pchar')->nullable();
			$table->float('minnumber', 10, 0)->nullable();
			$table->float('maxnumber', 10, 0)->nullable();
			$table->string('numbertype')->nullable();
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->float('city_id', 10, 0)->nullable();
			$table->string('municipality')->nullable();
			$table->float('municipality_id', 10, 0)->nullable();
			$table->string('province')->nullable();
			$table->string('province_code')->nullable();
			$table->float('lat', 10, 0)->nullable();
			$table->float('lon', 10, 0)->nullable();
			$table->float('rd_x', 10, 0)->nullable();
			$table->float('rd_y', 10, 0)->nullable();
			$table->string('location_detail')->nullable();
			$table->dateTime('changed_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postcodes_nl');
	}

}
