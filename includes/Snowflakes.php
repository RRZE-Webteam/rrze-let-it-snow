<?php


namespace RRZE\LetItSnow;

defined('ABSPATH') || exit;


    
class Snowflakes {

    protected $pluginFile;
    protected $settings;
    
    public function __construct($pluginFile, $settings) {
	$this->pluginFile = $pluginFile;
	$this->settings = $settings;		
    }
    
    public function onLoaded() {
         add_filter( 'wp_footer',  array( $this, 'add_snowflakes_html' )); 
    }

    /**
     * Add our HTML with snowflakes
     *
     */

    public function add_snowflakes_html($content) {
	$duration = $this->settings->getOption('basic', 'animation-duration');

         $original_content = $content ; // preserve the original ... 
	$snowflakes_html = '';
	if (!empty($duration) && $duration !== 'infinite') {
	    $snowflakes_html = '<style>.flakes i {animation-iteration-count: '.esc_attr($duration).' !important;-webkit-animation-iteration-count:'.esc_attr($duration).' !important;}</style>';
	}
	$snowflakes_html .= '<div class="flakes" tabindex="-1">
	    <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
	</div>';

	$content =$original_content. $snowflakes_html  ;

        // Returns the content.
        echo $content;
    }
}
