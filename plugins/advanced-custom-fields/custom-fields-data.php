<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-us-details',
		'title' => 'About Us Details',
		'fields' => array (
			array (
				'key' => 'field_58265bb10cb13',
				'label' => 'About Us Title',
				'name' => 'about_us_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58265c2c0cb14',
				'label' => 'About Us Details',
				'name' => 'about_us_details',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page_about-us.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_contact-details',
		'title' => 'Contact Details',
		'fields' => array (
			array (
				'key' => 'field_580c895e84e6d',
				'label' => 'Contact Details Content',
				'name' => 'contact_details_content',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page_contact-us.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_work-item',
		'title' => 'Work Item',
		'fields' => array (
			array (
				'key' => 'field_58224fc19580d',
				'label' => 'Image Section 1',
				'name' => 'image_section_1',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_58224ffd22b27',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'medium',
						'library' => 'all',
					),
				),
				'row_min' => 1,
				'row_limit' => 3,
				'layout' => 'table',
				'button_label' => 'Add Image',
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
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>