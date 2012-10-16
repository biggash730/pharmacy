<?php

class Create_Phurchase_Items {

	/**
	 *this function will create the purchase_items table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the purchase_items table
		Schema::create('purchase_items', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');		    
		    $table->integer('purchase_id')->unsigned();//->foreign()->references('id')->on('purchases');
		    $table->integer('product_id')->unsigned();//->foreign()->references('id')->on('products');
		    $table->integer('quantity');
		    $table->float('unit_price');
		    $table->float('total');
		    $table->date('purchase_date');		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamp('created_at');		    
		});	
	}

	/**
	 * this function will drop the purchase_items table.
	 *
	 * @return void
	 */
	public function down()
	{
		
	}

}