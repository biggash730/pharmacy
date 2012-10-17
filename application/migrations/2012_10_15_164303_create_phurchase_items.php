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
		Schema::create('purchased_items', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');		    
		    $table->integer('purchase_id')->unsigned();//->foreign()->references('id')->on('purchases');
		    $table->integer('product_id')->unsigned();//->foreign()->references('id')->on('products');
		    $table->integer('supplier_id')->unsigned();//->foreign()->references('id')->on('suppliers');
		    $table->integer('quantity');
		    $table->float('unit_cost');
		    $table->float('total_cost_price');		    	    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();		    
		    $table->timestamps();		    
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