//<?php

class Create_Orders {

	/*
	 * this function will create the orders table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the orders table
		Schema::create('orders', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('order_number', 128);		    	    		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    		    
		    $table->timestamp('created_at');		    
		});	
	}

	/**
	 * this function will drop the orders table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('orders');
		//Schema::drop('order_details');
	}

}