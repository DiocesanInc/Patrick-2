<?php

if (! function_exists('acf_add_local_field_group')) {
    return;
}

acf_add_local_field_group(array(
    'key' => 'group_614a21943d2a9',
    'title' => 'Ministries Page',
    'fields' => array(
        array(
            'key' => 'field_69120814eeb66',
            'label' => 'Ministry Lightbox',
            'name' => 'ministry_lightbox',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => '*Choose whether to open a Lightbox when clicking a ministry or going to a single page',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_614a219d13589',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'allow_in_bindings' => 0,
            'ui_on_text' => 'Single Page',
            'ui_off_text' => 'Lightbox',
            'ui' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'templates/page-ministries.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
));