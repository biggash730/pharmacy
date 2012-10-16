<?php

class Create_Phurchase_Item_Details {

	/**
	 *this function will create the purchase_items table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the purchase_item_details table
		Schema::create('purchase_item_details', function($table) {
			$table->engine = 'InnoDB';		    
			$table->increments('id');		    
		    $table->integer('purchase_Item_id')->unsigned();//->foreign()->references('id')->on('purchase_items');
		    $table->integer('product_id')->unsigned();//->foreign()->references('id')->on('products');
		    $table->integer('quantity');
		    $table->date('Expiry_date');	    	    
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
		//Schema::drop('purchase_item_details');
	}

}