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
        'color' => null,
        'bgcolor' => null,
        'class' => null,
    ), $atts );

    $style = "";
    $class = "";
    if ($a['class'])
        $class = $a['class'];
    if ($a['color'])
        $style .= "color: {$a['color']}; ";
    if ($a['bgcolor'])
        $style .= "background-color: {$a['bgcolor']}; ";

    $content = do_shortcode($content);

    return <<<END
<div class="page_section {$class}" style="$style">
<div class="container">
$content
</div>
</div>
END;
}
add_shortcode( 'page_section', 'page_section_func' );



function file_link_fa_func( $atts, $content=null ) {
    $a = shortcode_atts( array(
        'type' => null,
        'href' => null,
    ), $atts );

//    $types = array('pdf', 'doc');
    $types = array('pdf');

    $class = "far fa-file";
    if ( in_array($a['type'], $types) )
        $class = "far fa-file-{$a['type']}";

    $content = do_shortcode($content);

    return <<<END
<a href="{$a['href']}"><i class="{$class}"></i> $content</a>
END;
}
add_shortcode( 'file_link_fa', 'file_link_fa_func' );


?>