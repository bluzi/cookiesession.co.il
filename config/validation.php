<?php
	/*
		Defines the validators of every view.
	*/
	$config['validators'] = array(
		'admin.login' => array(
			'email' => array('email'),
			'password' => 'required',	
		),
		
		// Page
		// 'page.create' => array(
		// 	'name' => array('required'),
		// 	'url' => array('required', 'unique' => 'pages'),	
		// 	'physical_path' => array('required'),
		// 	'permission' => 'required',
		// 	'model' => 'required',
		// ),
		
		// 'page.edit' => array(
		// 	'get:name' => array('required', 'exists' => 'pages'),
		// 	'url' => array('required', 'unique' => 'pages'),	
		// 	'physical_path' => array('required'),
		// 	'permission' => 'required',
		// 	'model' => 'required',
		// ),
		
		'page.delete' => array(
			'name' => array('required', 'exists' => 'pages'),
		),
	);
	
	/*
		Contains keys of language resources for each validator.
	*/
	$config['validation_messages'] = array(
		'required' => "fill-required-fields",
		'email' => "enter-valid-email-address",
		'is_file' => "cannot-find-file",
		'unique' => "must-be-unique",
		'exists' => 'do-not-exist', 
	);
	
	/*
		Contains keys that will be ignored by the validation helper.
	*/
	$config['validation_ignoreable_keys'] = array(
		'action',
		'page',
	);