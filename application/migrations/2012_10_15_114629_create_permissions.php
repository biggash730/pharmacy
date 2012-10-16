<?php

class Create_Permissions {

	/**
	 *this function will create the permissions table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the permissions table
		Schema::create('permissions', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->integer('securable_id')->unsigned();//->foreign()->references('id')->on('securables');
		    $table->integer('module_id')->unsigned();//->foreign()->references('id')->on('modules');
		    $table->integer('role_id')->unsigned();//foreign()->references('id')->on('roles');
		    $table->text('privileges');    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the permissions table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('permissions');
	}

}