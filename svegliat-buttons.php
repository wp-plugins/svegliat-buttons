<?php
/*
Plugin Name: SvegliaT Buttons
Plugin URI: http://www.svegliatemplate.com/wordpress-svegliat-buttons/
Description: Add a shortcode in your wordpress to visualize nice and colored buttons.
Version: 1.1.0
Author: Mario Di Pasquale
Author URI: http://www.svegliadesign.com
*/

add_action( 'wp_enqueue_scripts', 'svegliat_add_my_stylesheet' );

   
function svegliat_add_my_stylesheet() {
       
        wp_register_style( 'svegliat-buttons', plugins_url('stylebuttons.css', __FILE__) );
        wp_enqueue_style( 'svegliat-buttons' );
    }
 
// PURPLE BUTTON

function buttonpurple_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_purple" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-purple', 'buttonpurple_func');

// ORANGE BUTTON

function buttonorange_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_orange" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-orange', 'buttonorange_func');

// GREEN BUTTON
 
function buttongreen_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_green" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-green', 'buttongreen_func');

// BLU BUTTON
 
function buttonblu_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_blu" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-blu', 'buttonblu_func');

// GRAY BUTTON
 
function buttongray_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_gray" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-gray', 'buttongray_func');

// BLACK BUTTON
 
function buttonblack_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_black" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-black', 'buttonblack_func');

// RED BUTTON
 
function buttonred_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_red" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-red', 'buttonred_func');

// PINK BUTTON
 
function buttonpink_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_pink" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-pink', 'buttonpink_func');

// YELLOW BUTTON
 
function buttonyellow_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_yellow" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('button-yellow', 'buttonyellow_func');


// ORANGE BIG BUTTON

function buttonorangbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_orangebig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-orange', 'buttonorangbig_func');

// GREEN BIG BUTTON
 
function buttongreenbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_greenbig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-green', 'buttongreenbig_func');

// YELLOW BIG BUTTON
 
function buttonyellowbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_yellowbig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-yellow', 'buttonyellowbig_func');

// PINK BIG BUTTON
 
function buttonpinkbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_pinkbig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-pink', 'buttonpinkbig_func');

// BLACK BIG BUTTON
 
function buttonblackbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_blackbig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-black', 'buttonblackbig_func');

// RED BIG BUTTON
 
function buttonredbig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_redbig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-red', 'buttonredbig_func');

// BLU BIG BUTTON
 
function buttonblubig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_blubig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-blu', 'buttonblubig_func');

// GRAY BIG BUTTON
 
function buttongraybig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_graybig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-gray', 'buttongraybig_func');

// PURPLE BIG BUTTON
 
function buttonpurplebig_func( $atts ) {
    extract(shortcode_atts(array(
	    'text' => esc_html__('Bottone', 'st-buttons'),
	    'title' => '',
	    'url' => '#',
    ), $atts));
    
    $html = '
		<div class="st-buttons"><a class="stbutton_purplebig" href="'.$url.'" title="'.$title.'">'.do_shortcode($text).'</a></div>';
    return $html;
}
add_shortcode('bigbutton-purple', 'buttonpurplebig_func');

// BUTTON ON EDITOR ----------------------------------

add_action('init', 'mylink_button');

function mylink_button() {

if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {

return;

}

if ( get_user_option('rich_editing') == 'true' ) {

add_filter( 'mce_external_plugins', 'add_plugin' );

add_filter( 'mce_buttons', 'register_button' );

}

}

function register_button( $buttons ) {

array_push( $buttons, "|", "tinymcebut" );

return $buttons;

}

function add_plugin( $plugin_array ) {

$plugin_array['tinymcebut'] = get_bloginfo( 'url' ) . '/wp-content/plugins/svegliat-buttons/js/tinymcebut.js';

return $plugin_array;

}


?>