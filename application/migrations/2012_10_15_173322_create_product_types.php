<?php

class Create_Product_Types {

	/**
	 * this function will create the product_types table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the product_types table
		Schema::create('product_types', function($table) {
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
	 * this function will drop the product_types table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('product_types');
	}

}