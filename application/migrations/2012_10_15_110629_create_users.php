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
		    $table->integer('role_id')->unsigned();
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
		Schema::table('users', function($table) {	
		   	$table->drop_foreign('users_role_id_foreign');	    
		});
		Schema::drop('purchase_order_details');			
		Schema::drop('permissions');
		Schema::drop('modules');
		Schema::drop('purchased_item_details');
		Schema::drop('purchased_items');
		Schema::drop('purchases');
		Schema::drop('purchase_orders');
		Schema::drop('suppliers');
		Schema::drop('securables');
		Schema::drop('products');
		Schema::drop('product_types');
		Schema::drop('product_categories');
		Schema::drop('sale_units');				
		Schema::drop('roles');
		Schema::drop('users');		
	}

}