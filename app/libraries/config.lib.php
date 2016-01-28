<?php

/**
*	Config info class
*
*	@version 2.0
*	@author  Nick Sheffield
*
*/

class Config{

	# Database connection credentials.
	# Hostname should almost always be set to 'localhost'.
	public static $database = [
		'hostname' => 'localhost',
		'username' => 'wadenair_admin',
		'password' => 'admin1234',
		'database' => 'wadenair_finishr'
	];
	
	
	# This variable allows Auth to autoload the current user.
	# Put the name of the table that your users are stored in
	# or leave it blank to disable that feature.
	public static $auth_table = 'user';
	
	
	# This variable allows the Cart library to autoload all
	# products in the cart as models.
	# Leave blank or comment out to disable this feature.
	public static $cart_table = '';
	
	
	# This variable is used to separate your Authentication 
	# and Cart data in the session, per site.
	public static $sitename = 'default';

}