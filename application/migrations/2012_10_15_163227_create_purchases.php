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
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamp('created_at');		    
		});	
	}

	/**
	 * this function will drop the purchases table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('purchases');
		//Schema::drop('purchase_items');
		//Schema::drop('purchase_item_details');
		//Schema::drop('products');
		//Schema::drop('categories');
		//Schema::drop('product_types');
		//Schema::drop('sale_units');
		
	}

}