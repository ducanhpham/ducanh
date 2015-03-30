<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateDb extends Migration {

		/**
		* Run the migrations.
		*
		* @return void
		*/
		public function up()
		{
			Schema::create('info', function($table)
				{
					$table->increments('id');
					$table->string('email')->nullable();
					$table->string('phone')->nullable();
					$table->string('visit')->nullable();
					$table->string('service')->nullable();
					$table->string('code')->nullable();
					$table->string('status')->nullable();
					$table->timestamps();
			});
		}

		/**
		* Reverse the migrations.
		*
		* @return void
		*/
		public function down()
		{
			Schema::drop('info');
		}

	}
