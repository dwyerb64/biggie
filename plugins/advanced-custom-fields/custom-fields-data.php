if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-us-details',
		'title' => 'About Us Details',
		'fields' => array (
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
				'key' => 'field_580c88cd84e6c',
				'label' => 'Contact Details Title',
				'name' => 'contact_details_title',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
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
		'id' => 'acf_inside-page-workunit',
		'title' => 'Inside Page - WorkUnit',
		'fields' => array (
			array (
				'key' => 'field_582908396b7a7',
				'label' => 'work unit title',
				'name' => 'work_unit_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_582909883cbbe',
				'label' => 'work unit image',
				'name' => 'work_unit_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58290a4369a72',
				'label' => 'work unit image caption',
				'name' => 'work_unit_image_caption',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58290ac069a73',
				'label' => 'work unit text area',
				'name' => 'work_unit_text_area',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page_inside.php',
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
				'key' => 'field_58224daff0d91',
				'label' => 'Client',
				'name' => 'client',
				'type' => 'text',
				'instructions' => 'Enter Client Name',
				'required' => 1,
				'default_value' => 'Mondello',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
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
			array (
				'key' => 'field_58224e1df0d94',
				'label' => 'Body Part 1',
				'name' => 'body_part_1',
				'type' => 'wysiwyg',
				'instructions' => 'The first part of the article goes here. This section will be right aligned.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
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
