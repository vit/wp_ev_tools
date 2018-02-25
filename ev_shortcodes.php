<?php
/*
Plugin Name: Evarist Shortcodes
Plugin URI: http://evarist.ru
Description: shortcodes
Version: 0.0.1
Author: vit
Author URI: http://evarist.ru
*/

function page_section_func( $atts, $content=null ) {
    $a = shortcode_atts( array(
        //'foo' => 'something',
        //'bar' => 'something else',
    ), $atts );

    return <<<END
<div class="green">
<div class="container">
$content
</div>
</div>
END;
}
add_shortcode( 'page_section', 'page_section_func' );

?>