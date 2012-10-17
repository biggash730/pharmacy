<?php

class Create_User_Roles {

	/**
	 *this function will create the user_roles table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the user_roles table
		Schema::create('user_roles', function($table) {
			$table->engine = 'InnoDB';
			$table->integer('user_id')->unsigned()->unique();
		    $table->integer('role_id')->unsigned();
		    $table->primary(array('user_id', 'role_id'));  
		    
		});	
	}

	/**
	 * this function will drop the user_roles table.
	 *
	 * @return void
	 */
	public function down()
	{
		
	}

}