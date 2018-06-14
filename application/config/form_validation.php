<?php 

$config = [

	'blog_rules' => [

		[
			'field'=>'title',
			'label'=>'Title',
			'rules'=>'required'
		],
		[
			'field'=>'body',
			'label'=>'Discription',
			'rules'=>'required'
		]

	],
	'user_login'=>[
		[
			'field'=>'username',
			'label'=>'User Name',
			'rules'=>'required|alpha_numeric|trim'
		],
		[
			'field'=>'password',
			'label'=>'password',
			'rules'=>'required|trim'
		]
	],
	'slider_valid'=>[
		[ 
		'field'=>'name',
		'label'=>'Name',
		'rules'=>'required'
	]
	]

];