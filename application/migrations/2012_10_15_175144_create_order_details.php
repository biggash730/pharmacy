<?php

class Create_Order_Details {

	/**
	 *this function will create the order_details table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the order_details table
		Schema::create('order_details', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');		    
		    $table->integer('order_id')->unsigned();//->foreign()->references('id')->on('orders');
		    $table->integer('product_id')->unsigned();//->foreign()->references('id')->on('products');
		    $table->integer('quantity');		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamp('created_at');		    
		});	
	}

	/**
	 * this function will drop the order_details table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('order_details');
	}

}