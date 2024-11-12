<?php

function acf_hero()
{
    return array(
        array(
            'key' => 'field_6182f3d1311be',
            'label' => 'Hero',
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
            'key' => 'field_6182f440311bf',
            'label' => 'Overlay',
            'name' => 'hero_overlay',
            'type' => 'select',
            'instructions' => '*choose the opacity of the overlay for the hero in order to make text readable on light images',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                0 => 'No Overlay',
                '0.125' => 'Very Light',
                '0.25' => 'Light',
                '0.5' => 'Regular',
                '0.75' => 'Dark',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 1,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_6182f461311c0',
            'label' => 'Hero Style',
            'name' => 'is_video',
            'type' => 'true_false',
            'instructions' => '*choose whether the hero is an image/slider or a video',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Video',
            'ui_off_text' => 'Slider',
        ),
        array(
            'key' => 'field_6182f48c311c1',
            'label' => 'Parallax Scrolling',
            'name' => 'parallax_scrolling',
            'type' => 'true_false',
            'instructions' => '*add a parallax scrolling effect to the hero image',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_6182f461311c0',
                        'operator' => '!=',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_62d05eb8e4507',
            'label' => 'Mass Times Link',
            'name' => 'hero_mass_times_link',
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
            'key' => 'field_6182f4a8311c2',
            'label' => 'Slider',
            'name' => 'slider',
            'type' => 'repeater',
            'instructions' => '*choose the image(s) for the hero. If more than one image is selected the hero will turn into an image slider',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_6182f461311c0',
                        'operator' => '!=',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'collapsed' => 'field_6182f4b5311c3',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'field_6182f4b5311c3',
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
                    'key' => 'field_6182f4ec311c4',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => '*Max 50 Characters',
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
                    'maxlength' => 50,
                ),
                array(
                    'key' => 'field_6182f4fa311c5',
                    'label' => 'Buttons',
                    'name' => 'hero_buttons',
                    'type' => 'repeater',
                    'instructions' => '*Up to 1 Button',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 1,
                    'layout' => 'block',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_6182f50e311c6',
                            'label' => 'Link',
                            'name' => 'link',
                            'type' => 'link',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'array',
                        ),
                        array(
                            'key' => 'field_6182f51f311c7',
                            'label' => 'Color',
                            'name' => 'color',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'has-primary-background-color' => 'Primary',
                                'has-secondary-background-color' => 'Secondary',
                                'has-tertiary-background-color' => 'Tertiary',
                                'has-quaternary-background-color' => 'Quaternary',
                                'has-transparent-background-color' => 'Transparent',
                            ),
                            'default_value' => false,
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 1,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                    ),
                ),
            ),
        ),
        array(
            'key' => 'field_6182f554311c8',
            'label' => 'Video',
            'name' => 'hero_video',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_6182f461311c0',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '100',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                array(
                    'key' => 'field_6182f574311c9',
                    'label' => 'MP4',
                    'name' => 'mp4',
                    'type' => 'file',
                    'instructions' => '*the hero video in mp4 format',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => 'mp4',
                ),
                array(
                    'key' => 'field_6182f58c311ca',
                    'label' => 'OGG',
                    'name' => 'ogg',
                    'type' => 'file',
                    'instructions' => '*the hero video in off format',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => 'ogg',
                ),
                array(
                    'key' => 'field_6182f5a5311cb',
                    'label' => 'WEBM',
                    'name' => 'webm',
                    'type' => 'file',
                    'instructions' => '*the hero video in webm format',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '33',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'library' => 'all',
                    'min_size' => '',
                    'max_size' => '',
                    'mime_types' => 'webm',
                ),
                array(
                    'key' => 'field_61ca0d45740be',
                    'label' => 'Poster Image',
                    'name' => 'poster_image',
                    'type' => 'image',
                    'instructions' => '*Image shown while the video loads',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '100',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
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
            ),
        ),
    );
}