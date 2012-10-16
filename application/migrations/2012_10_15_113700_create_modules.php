<?php

class Create_Modules {

	/**
	 *this function will create the modules table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the modules table
		Schema::create('modules', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('name', 128);		    
		    $table->integer('list_order')->default(1);
		    $table->integer('role_id')->unsigned();//->foreign()->references('id')->on('roles');
		    $table->text('privileges');    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the modules table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('modules');
	}

}