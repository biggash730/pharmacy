<?php

class Create_Categories {

	/**
	 * this function will create the categories table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the categories table
		Schema::create('categories', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('name', 128);
		    $table->text('description')->nullable();		    		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the categories table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('categories');
	}

}