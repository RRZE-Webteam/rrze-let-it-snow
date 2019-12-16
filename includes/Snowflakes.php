<?php


namespace RRZE\LetItSnow;

defined('ABSPATH') || exit;

class Snowflakes {
    public function __construct() {
	add_filter(
	'the_content', array( $this, 'add_snowflakes_html' )
	);		
    }
    
    /**
     * Add our HTML with snowflakes
     *
     */
    public function add_snowflakes_html($content) {
         $original_content = $content ; // preserve the original ... 
	$snowflakes_html = '<div class="flakes">
	    <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
	</div>';

	$content = $snowflakes_html . $original_content;

        // Returns the content.
        return $content;
    }
}