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
	],
	'category_'=>[
		[
			'field'=>'cat_name',
			'label'=>'Category name',
			'rules'=>'required|alpha_numeric'
		],
		[
			'field'=>'cat_desc',
			'label'=>'Discription',
			'rules'=>'required|trim'
		]
	],
	'awards_'=>[
		[
			'field'=>'name',
			'label'=>'Name',
			'rules'=>'required'
		],
		[
			'field'=>'place',
			'label'=>'Position',
			'rules'=>'required|trim'
		],
		[
			'field'=>'date',
			'label'=>'Date',
			'rules'=>'required|trim|numeric'
		]
	], 'social_'=>[
		[
			'field'=>'social_class',
			'label'=>'social class',
			'rules'=>'required|trim'
		],
		[
			'field'=>'social_link',
			'label'=>'url link',
			'rules'=>'required|trim'
		]
	],
	'section_rules' => [

		[
			'field'=>'sec_name',
			'label'=>'Title',
			'rules'=>'required'
		],
		[
			'field'=>'sec_page',
			'label'=>'Discription',
			'rules'=>'required'
		]

	],
	'page_rules' => [

		[
			'field'=>'pag_name',
			'label'=>'Title',
			'rules'=>'required'
		],
		[
			'field'=>'pag_slug',
			'label'=>'Slug',
			'rules'=>'required'
		],
		[
			'field'=>'pag_desc',
			'label'=>'Discription',
			'rules'=>'required'
		]

	],
	'contact_form' => [

		[
			'field'=>'name',
			'label'=>'Title',
			'rules'=>'required|alpha_numeric_spaces|trim'
		],
		[
			'field'=>'email',
			'label'=>'Discription',
			'rules'=>'required|valid_email'
		],
		[
			'field'=>'message',
			'label'=>'Discription',
			'rules'=>'required|alpha_numeric_spaces|trim'
		]

	],
	'comment_rules' => [

		[
			'field'=>'comment_sender_name',
			'label'=>'Sender Name',
			'rules'=>'required|alpha_numeric_spaces|trim'
		],
		[
			'field'=>'com_email',
			'label'=>'Email',
			'rules'=>'required|valid_email'
		],
		[
			'field'=>'comment',
			'label'=>'Message',
			'rules'=>'required|alpha_numeric_spaces|trim'
		]

	]

];