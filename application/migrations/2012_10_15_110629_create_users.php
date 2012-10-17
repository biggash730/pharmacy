<?php

class Create_Users {

	/**
	 *this function will create the users table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the users table
		Schema::create('users', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('first_name', 128);
		    $table->string('last_name', 128);
		    $table->string('user_name', 128);
		    $table->string('other_names', 128)->nullable();
		    $table->string('email', 128);
		    $table->string('phone', 45)->nullable();
		    $table->string('password', 128);	    
		    $table->string('picture_file_name', 128)->nullable();
		    $table->integer('created_by')->unsigned();
		    $table->integer('updated_by')->unsigned();
		    $table->timestamps();
		    
		});	
	}

	/**
	 * this function will drop the database tables.
	 *
	 * @return void
	 */
	public function down()
	{			
		Schema::drop('order_details');
		Schema::drop('orders');	
		Schema::drop('permissions');
		Schema::drop('modules');
		Schema::drop('purchase_item_details');
		Schema::drop('purchase_items');
		Schema::drop('purchases');
		Schema::drop('securables');
		Schema::drop('products');
		Schema::drop('product_types');
		Schema::drop('categories');
		Schema::drop('sale_units');
		Schema::drop('user_roles');
		Schema::drop('roles');
		Schema::drop('users');		
	}

}