<?php

class Create_Securables {

	/**
	 *this function will create the securables table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the securables table
		Schema::create('securables', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('name', 128);
		    $table->string('display_name', 128);	    	      
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the securables table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('securables');
	}

}