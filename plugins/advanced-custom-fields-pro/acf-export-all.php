<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5834c14c62151',
  'title' => 'About Us Details',
  'fields' => array (
    array (
      'key' => 'field_58265bb10cb13',
      'label' => 'About Us Title',
      'name' => 'about_us_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
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
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'br',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page_about-us.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
  ),
  'active' => 1,
  'description' => '',
  'old_ID' => 51,
  'local' => 'php',
));

acf_add_local_field_group(array (
  'key' => 'group_5834c14c87518',
  'title' => 'Contact Details',
  'fields' => array (
    array (
      'key' => 'field_580c88cd84e6c',
      'label' => 'Contact Details Title',
      'name' => 'contact_details_title',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'br',
    ),
    array (
      'key' => 'field_580c895e84e6d',
      'label' => 'Contact Details Content',
      'name' => 'contact_details_content',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'br',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page_contact-us.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
  'old_ID' => 9,
  'local' => 'php',
));

acf_add_local_field_group(array (
  'key' => 'group_583758b458c27',
  'title' => 'Footer Content',
  'fields' => array (
    array (
      'key' => 'field_58388d5e88c9c',
      'label' => 'Social Links',
      'name' => 'social_links',
      'type' => 'repeater',
      'instructions' => 'Add a social link by selecting a social media platform and entering the URL',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => '',
      'max' => '',
      'layout' => 'table',
      'button_label' => 'Add Row',
      'sub_fields' => array (
        array (
          'key' => 'field_58388d7388c9d',
          'label' => 'social media platform',
          'name' => 'social_media_platform',
          'type' => 'radio',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'facebook' => 'FaceBook',
            'youtube' => 'Youtube',
            'twitter' => 'Twitter',
            'linkedIn' => 'LinkedIn',
            'pinterest' => 'Pinterest',
            'googlePlus' => 'Google Plus',
            'tumblr' => 'Tumblr',
            'instagram' => 'Instagram',
            'vimeo' => 'Vimeo',
          ),
          'allow_null' => 0,
          'other_choice' => 0,
          'save_other_choice' => 0,
          'default_value' => '',
          'layout' => 'vertical',
          'return_format' => 'array',
        ),
        array (
          'key' => 'field_58388dc088c9e',
          'label' => 'Social Media URL',
          'name' => 'social_media_url',
          'type' => 'url',
          'instructions' => '',
          'required' => 1,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
      ),
    ),
    array (
      'key' => 'field_58441213103db',
      'label' => 'company Name',
      'name' => 'company_name',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Big O',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_5844123b103dc',
      'label' => 'Address Line 1',
      'name' => 'address_line_1',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '9 Mount Street Crescent',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_584412ca103dd',
      'label' => 'Address Line 2',
      'name' => 'address_line_2',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Dublin 2',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_584412d8103de',
      'label' => 'Country',
      'name' => 'country',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Ireland',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_584412f2103df',
      'label' => 'Telephone Number',
      'name' => 'telephone_number',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '+353 (1) 531 255',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_5844132a103e0',
      'label' => 'Email Address',
      'name' => 'email_address',
      'type' => 'email',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'hi@bigo.ie',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-footer',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
  'local' => 'php',
));

acf_add_local_field_group(array (
  'key' => 'group_584be77d6a049',
  'title' => 'Primary navigation color',
  'fields' => array (
    array (
      'key' => 'field_584be7ee3fb48',
      'label' => 'Color of primary navigation elements',
      'name' => 'primary_nav_element_color',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#404041',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-header',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
  'local' => 'php',
));

acf_add_local_field_group(array (
  'key' => 'group_584c0eb08d43c',
  'title' => 'Social navigation color',
  'fields' => array (
    array (
      'key' => 'field_584c0eb0a3551',
      'label' => 'Color of social navigation elements',
      'name' => 'social_nav_element_color',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#404041',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-header',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
  'local' => 'php',
));

acf_add_local_field_group(array (
  'key' => 'group_5834c3c1cd447',
  'title' => 'Work Article',
  'fields' => array (
    array (
      'key' => 'field_5834c5ebcbaa9',
      'label' => 'Client',
      'name' => 'client',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_584c387198581',
      'label' => 'Enable Custom Title',
      'name' => 'enable_custom_title',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If you wish to have a WYSIWYG for the title select true',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_584c389198582',
      'label' => 'Custom Title',
      'name' => 'custom_title',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_584c387198581',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 1,
    ),
    array (
      'key' => 'field_5834c557e6d24',
      'label' => 'Work Content',
      'name' => 'work_content',
      'type' => 'flexible_content',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Content',
      'min' => '',
      'max' => '',
      'layouts' => array (
        array (
          'key' => '5834c55c15b79',
          'name' => 'body_content',
          'label' => 'Body Content',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_5834c56de6d25',
              'label' => 'Body Content',
              'name' => 'body_content',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5834c6f33db49',
          'name' => 'image',
          'label' => 'Image(s)',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_5834c7173db4a',
              'label' => 'Images',
              'name' => 'images',
              'type' => 'gallery',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'min' => '',
              'max' => '',
              'insert' => 'append',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5834c896661c0',
          'name' => 'body_content_with_quote',
          'label' => 'Body Content With Pull Quote',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_583891bac0c70',
              'label' => 'Pull Quote',
              'name' => 'pull_quote',
              'type' => 'textarea',
              'instructions' => 'Please enter Pull Quote here.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => 6,
              'new_lines' => 'wpautop',
            ),
            array (
              'key' => 'field_583891dbc0c71',
              'label' => 'Body Content',
              'name' => 'body_content',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'full',
              'media_upload' => 1,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '58389225ee993',
          'name' => 'video',
          'label' => 'Video',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_5838926dee994',
              'label' => 'Video URL',
              'name' => 'video_url',
              'type' => 'oembed',
              'instructions' => 'Copy and paste the youtube or vimeo URL into the field.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => 'video-container',
                'id' => '',
              ),
              'width' => '',
              'height' => '',
            ),
            array (
              'key' => 'field_583892d2ee995',
              'label' => 'Play Button Colour',
              'name' => 'play_button_colour',
              'type' => 'color_picker',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
            ),
            array (
              'key' => 'field_5838947aee996',
              'label' => 'Video Placeholder',
              'name' => 'video_placeholder',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '584c1a80d9574',
          'name' => 'background_image',
          'label' => 'Background Image',
          'display' => 'row',
          'sub_fields' => array (
            array (
              'key' => 'field_584c1aacd9575',
              'label' => 'image',
              'name' => 'image',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'portfolio',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_5834c01b78688',
  'title' => 'Work Group',
  'fields' => array (
    array (
      'key' => 'field_5834c1c4be7df',
      'label' => 'Caption',
      'name' => 'caption',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
    ),
    array (
      'key' => 'field_5834b52db127a',
      'label' => 'Image Set',
      'name' => 'imageset',
      'type' => 'gallery',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => 1,
      'max' => 3,
      'insert' => 'append',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;
?>