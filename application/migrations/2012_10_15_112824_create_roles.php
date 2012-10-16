<?php

class Create_Roles {

	/**
	 *this function will create the roles table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the roles table
		Schema::create('roles', function($table) {	
			$table->engine = 'InnoDB';		
		    $table->increments('id');
		    $table->string('name', 128);
		    $table->string('description', 128)->nullable();	
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');
			$table->timestamps();	
		});
	}

	/**
	 * this function will drop the roles table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('roles');
	}

}