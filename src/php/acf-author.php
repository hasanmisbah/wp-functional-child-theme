<?php 

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_author-meta',
		'title' => 'author meta',
		'fields' => array (
			array (
				'key' => 'field_59e9dc4eebc84',
				'label' => 'লেখক',
				'name' => 'post-author',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'লেখকের নাম লিখুন',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_59e9dccaebc85',
				'label' => 'লেখক সম্পর্কে',
				'name' => 'Author-info',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => 'লেখক সম্পর্কে আপনার জানা থাকলে লিখুন নতুবা হাবি জাবি না লেখলেও চলবে।',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


?>