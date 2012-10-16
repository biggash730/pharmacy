<?php

class Create_Sale_Units {

	/**
	 * this function will create the sale_units table
	 * and the specified columns.
	 * @return void
	 */
	public function up()
	{
		// create the sale_units table
		Schema::create('sale_units', function($table) {
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('name', 128);
		    $table->string('symbol',128);		    		    	    
		    $table->integer('created_by')->unsigned();//->foreign()->references('id')->on('users');
		    $table->integer('updated_by')->unsigned();//->foreign()->references('id')->on('users');		    
		    $table->timestamps();		    
		});	
	}

	/**
	 * this function will drop the sale_units table.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('sale_units');
	}

}