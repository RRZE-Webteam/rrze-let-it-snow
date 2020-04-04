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
                '<p>' . __('THis plugin just lets snow on your website.', 'rrze-letitsnow') . '</p>'
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
	    /*
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
            */
            [
                'name'    => 'animation-duration',
                'label'   => __('Animation Duration', 'rrze-letitsnow'),
                'desc'    => __('How many snow will come.', 'rrze-letitsnow'),
                'type'    => 'select',
                'default' => 'infinite',
                'options' => [
                    'infinite' => __('Infinite snowflakes', 'rrze-letitsnow'),
		  '10'  => __('560 Snowflakes', 'rrze-letitsnow'),
                    '20'  => __('1.160 Snowflakes', 'rrze-letitsnow'),
		  '100'  => __('5.600 Snowflakes', 'rrze-letitsnow'),
		  '1000'  => __('56.000 Snowflakes', 'rrze-letitsnow')
                ]
            ]
        ],
       
    ];
}
