<?php

class Create_Constraints {

	/**
	 *this function will create the constraints on the tables
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create constraints on the users table
		Schema::table('users', function($table) {	
		   	$table->foreign('role_id')->references('id')->on('roles');
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the roles table
		Schema::table('roles', function($table) {		    	    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');
		});

		// create constraints on the modules table
		Schema::table('modules', function($table) {			
		    $table->foreign('role_id')->references('id')->on('roles');		    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the securables table
		Schema::table('securables', function($table) {		    	    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the permissions table
		Schema::table('permissions', function($table) {	
			$table->foreign('securable_id')->references('id')->on('securables');
			$table->foreign('module_id')->references('id')->on('modules');		
		    $table->foreign('role_id')->references('id')->on('roles');		    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the purchases table
		Schema::table('purchases', function($table) {
			$table->foreign('purchase_order_id')->references('id')->on('purchase_orders');	    		    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    	    
		});

		// create constraints on the purchase_items table
		Schema::table('purchased_items', function($table) {			
		    $table->foreign('purchase_id')->references('id')->on('purchases');		    
		    $table->foreign('product_id')->references('id')->on('products');
		    $table->foreign('supplier_id')->references('id')->on('suppliers');
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the purchase_item_details table
		Schema::table('purchased_item_details', function($table) {			
		    $table->foreign('purchased_Item_id')->references('id')->on('purchased_Items');    
		    $table->foreign('product_id')->references('id')->on('products');
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the products table
		Schema::table('products', function($table) {			
		    $table->foreign('product_category_id')->references('id')->on('product_categories');	
		    $table->foreign('product_type_id')->references('id')->on('product_types');	
		    $table->foreign('sale_unit_id')->references('id')->on('sale_units');		    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the product_categories table
		Schema::table('product_categories', function($table) {		    	    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the suppliers table
		Schema::table('suppliers', function($table) {		    	    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the product_types table
		Schema::table('product_types', function($table) {		    	    
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the sale_units table
		Schema::table('sale_units', function($table) {			
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    
		});

		// create constraints on the purchase_orders table
		Schema::table('purchase_orders', function($table) {			
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');
		});

		// create constraints on the purchase_order_details table
		Schema::table('purchase_order_details', function($table) {	
			$table->foreign('purchase_order_id')->references('id')->on('purchase_orders');
			$table->foreign('product_id')->references('id')->on('products');		
		    $table->foreign('created_by')->references('id')->on('users');
		    $table->foreign('updated_by')->references('id')->on('users');		    		    
		});

		// create constraints on the user_roles table
		//Schema::table('user_roles', function($table) {	
			//$table->foreign('role_id')->references('id')->on('roles');
			//$table->foreign('user_id')->references('id')->on('users');   	    		    
		//});

	}

	/**
	 * this function will drop the tables.
	 *
	 * @return void
	 */
	public function down()
	{
		
	}

}