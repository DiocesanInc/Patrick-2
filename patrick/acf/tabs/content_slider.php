<?php

function acf_content_slider()
{
    return array(
        array(
            'key' => 'field_626ac5eb121bd',
            'label' => 'Content Slider',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_626ac72c121be',
            'label' => 'Heading',
            'name' => 'content_slider_heading',
            'type' => 'text',
            'instructions' => '*Max 30 characters',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 30,
        ),
        array(
            'key' => 'field_626ac809121bf',
            'label' => 'Slides',
            'name' => 'content_slider_slides',
            'type' => 'repeater',
            'instructions' => '*Max 4 Slides',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_626ac843121c1',
            'min' => 0,
            'max' => 4,
            'layout' => 'block',
            'button_label' => 'Add Slide',
            'sub_fields' => array(
                array(
                    'key' => 'field_626ac827121c0',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_626ac843121c1',
                    'label' => 'Heading',
                    'name' => 'heading',
                    'type' => 'text',
                    'instructions' => '*Max 30 characters',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 30,
                ),
                array(
                    'key' => 'field_626ac8ae121c3',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                ),
                array(
                    'key' => 'field_626ac8cc121c4',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '25',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array(
                    'key' => 'field_626ac878121c2',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'textarea',
                    'instructions' => '*Max 500 characters',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => 500,
                    'rows' => 4,
                    'new_lines' => 'br',
                ),
            ),
        ),
    );
}