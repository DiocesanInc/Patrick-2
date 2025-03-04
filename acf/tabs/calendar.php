<?php

function acf_calendar()
{
    return array(
        array(
            'key' => 'field_626aca39f562b',
            'label' => 'Calendar',
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
            'key' => 'field_623cb1cbaac8z',
            'label' => 'Heading',
            'name' => 'calendar_heading',
            'type' => 'text',
            'instructions' => '*Max 20 Characters',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 20,
        ),
        array(
            'key' => 'field_62d586628366z',
            'label' => 'Link',
            'name' => 'calendar_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'array',
        ),
        array(
            'key' => 'field_626aca56f562c',
            'label' => 'Calendar',
            'name' => 'calendar',
            'type' => 'simple_calendar',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'allow_null' => 1,
        )
    );
}