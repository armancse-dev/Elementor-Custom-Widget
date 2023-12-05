<?php
/**
 * Plugin Name: Elementor Team Widget
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://armandev.com/
 * Version:     1.0.0
 * Author:      Arman
 * Author URI:  https://armandev.com/
 * Text Domain: ele-t-widget
 *
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Register Team Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_team_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/team-widget.php' );

	$widgets_manager->register( new \Elementor_Team_Widget() );

}
add_action( 'elementor/widgets/register', 'register_team_widget' );