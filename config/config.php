<?php

namespace RRZE\LetItSnow\Config;

defined('ABSPATH') || exit;

/**
 * Gibt der Name der Option zurück.
 * @return array [description]
 */
function getOptionName()
{
    return 'rrze_letitsnow';
}

/**
 * Gibt die Einstellungen des Menus zurück.
 * @return array [description]
 */
function getMenuSettings()
{
    return [
        'page_title'    => __('RRZE Let it snow', 'rrze-letitsnow'),
        'menu_title'    => __('RRZE Let it snow', 'rrze-letitsnow'),
        'capability'    => 'manage_options',
        'menu_slug'     => 'rrze-letitsnow',
        'title'         => __('RRZE Let it snow Settings', 'rrze-letitsnow'),
    ];
}

/**
 * Gibt die Einstellungen der Inhaltshilfe zurück.
 * @return array [description]
 */
function getHelpTab()
{
    return [
        [
            'id'        => 'rrze-letitsnow-help',
            'content'   => [
                '<p>' . __('Here comes the Context Help content.', 'rrze-letitsnow') . '</p>'
            ],
            'title'     => __('Overview', 'rrze-letitsnow'),
            'sidebar'   => sprintf('<p><strong>%1$s:</strong></p><p><a href="https://blogs.fau.de/webworking">RRZE Webworking</a></p><p><a href="https://github.com/RRZE Webteam">%2$s</a></p>', __('For more information', 'rrze-letitsnow'), __('RRZE Webteam on Github', 'rrze-letitsnow'))
        ]
    ];
}

/**
 * Gibt die Einstellungen der Optionsbereiche zurück.
 * @return array [description]
 */
function getSections()
{
    return [
        [
            'id'    => 'basic',
            'title' => __('Basic Settings', 'rrze-letitsnow')
        ],
        [
            'id'    => 'advanced',
            'title' => __('Advanced Settings', 'rrze-letitsnow')
        ]
    ];
}

/**
 * Gibt die Einstellungen der Optionsfelder zurück.
 * @return array [description]
 */
function getFields()
{
    return [
        'basic' => [
            [
                'name'              => 'text_input',
                'label'             => __('Text Input', 'rrze-letitsnow'),
                'desc'              => __('Text input description.', 'rrze-letitsnow'),
                'placeholder'       => __('Text Input placeholder', 'rrze-letitsnow'),
                'type'              => 'text',
                'default'           => 'Title',
                'sanitize_callback' => 'sanitize_text_field'
            ],
            [
                'name'              => 'number_input',
                'label'             => __('Number Input', 'rrze-letitsnow'),
                'desc'              => __('Number input description.', 'rrze-letitsnow'),
                'placeholder'       => '5',
                'min'               => 0,
                'max'               => 100,
                'step'              => '1',
                'type'              => 'number',
                'default'           => 'Title',
                'sanitize_callback' => 'floatval'
            ],
            [
                'name'        => 'textarea',
                'label'       => __('Textarea Input', 'rrze-letitsnow'),
                'desc'        => __('Textarea description', 'rrze-letitsnow'),
                'placeholder' => __('Textarea placeholder', 'rrze-letitsnow'),
                'type'        => 'textarea'
            ],
            [
                'name'  => 'checkbox',
                'label' => __('Checkbox', 'rrze-letitsnow'),
                'desc'  => __('Checkbox description', 'rrze-letitsnow'),
                'type'  => 'checkbox'
            ],
            [
                'name'    => 'multicheck',
                'label'   => __('Multiple checkbox', 'rrze-letitsnow'),
                'desc'    => __('Multiple checkbox description.', 'rrze-letitsnow'),
                'type'    => 'multicheck',
                'default' => [
                    'one' => 'one',
                    'two' => 'two'
                ],
                'options'   => [
                    'one'   => __('One', 'rrze-letitsnow'),
                    'two'   => __('Two', 'rrze-letitsnow'),
                    'three' => __('Three', 'rrze-letitsnow'),
                    'four'  => __('Four', 'rrze-letitsnow')
                ]
            ],
            [
                'name'    => 'radio',
                'label'   => __('Radio Button', 'rrze-letitsnow'),
                'desc'    => __('Radio button description.', 'rrze-letitsnow'),
                'type'    => 'radio',
                'options' => [
                    'yes' => __('Yes', 'rrze-letitsnow'),
                    'no'  => __('No', 'rrze-letitsnow')
                ]
            ],
            [
                'name'    => 'selectbox',
                'label'   => __('Dropdown', 'rrze-letitsnow'),
                'desc'    => __('Dropdown description.', 'rrze-letitsnow'),
                'type'    => 'select',
                'default' => 'no',
                'options' => [
                    'yes' => __('Yes', 'rrze-letitsnow'),
                    'no'  => __('No', 'rrze-letitsnow')
                ]
            ]
        ],
        'advanced' => [
            [
                'name'    => 'color',
                'label'   => __('Color', 'rrze-letitsnow'),
                'desc'    => __('Color description.', 'rrze-letitsnow'),
                'type'    => 'color',
                'default' => ''
            ],
            [
                'name'    => 'password',
                'label'   => __('Password', 'rrze-letitsnow'),
                'desc'    => __('Password description.', 'rrze-letitsnow'),
                'type'    => 'password',
                'default' => ''
            ],
            [
                'name'    => 'wysiwyg',
                'label'   => __('Advanced Editor', 'rrze-letitsnow'),
                'desc'    => __('Advanced Editor description.', 'rrze-letitsnow'),
                'type'    => 'wysiwyg',
                'default' => ''
            ],
            [
                'name'    => 'file',
                'label'   => __('File', 'rrze-letitsnow'),
                'desc'    => __('File description.', 'rrze-letitsnow'),
                'type'    => 'file',
                'default' => '',
                'options' => [
                    'button_label' => __('Choose an Image', 'rrze-letitsnow')
                ]
            ]
        ]
    ];
}
