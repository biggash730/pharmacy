//<?php

class Create_Orders {

	/*
	 * this function will create the purchase_orders table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the purchase_orders table
		Schema::create('purchase_orders', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('order_number', 128);
		    $table->string('approved',50);
		    $table->date('purchase_date');		    	    		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    		    
		    $table->integer('updated_by')->unsigned();		    
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the purchase_orders table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('purchase_orders');
		//Schema::drop('purchase_order_details');
	}

}