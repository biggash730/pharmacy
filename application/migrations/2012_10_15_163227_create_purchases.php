<?php

class Create_Purchases {

	/**
	 * this function will create the purchases table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the purchases table
		Schema::create('purchases', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('purchase_number', 128);
		    $table->integer('purchase_order_id')->unsigned();	
		    $table->date('date_purchased');	    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->integer('updated_by')->unsigned();
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the purchases table.
	 *
	 * @return void
	 */
	public function down()
	{
		
		
	}

}