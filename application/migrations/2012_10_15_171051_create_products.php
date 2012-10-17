<?php

class Create_Products {

	/**
	 * this function will create the products table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the products table
		Schema::create('products', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('name', 128);
		    $table->text('description')->nullable();
		    $table->string('code', 128);
		    $table->integer('product_category_id')->unsigned();//->foreign()->references('id')->on('categories');		    
		    $table->integer('product_type_id')->unsigned();//->foreign()->references('id')->on('product_types');
		    $table->integer('sale_unit_id')->unsigned();//->foreign()->references('id')->on('sales_units');		    	    
		    $table->integer('reorder_level')->unsigned();
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the products table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('products');
	}

}