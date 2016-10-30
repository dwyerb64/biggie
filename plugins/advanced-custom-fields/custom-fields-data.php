<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_work',
    'title' => 'Work',
    'fields' => array (
      array (
        'key' => 'field_5815fe4c04cf3',
        'label' => 'Client',
        'name' => 'client',
        'type' => 'text',
        'required' => 1,
        'default_value' => 'Mondello',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'work',
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
