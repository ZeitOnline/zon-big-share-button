<?php
/**
 * @package ZEIT ONLINE Big Share Buttons
 *
 * Plugin Name:       ZEIT ONLINE Big Share Buttons
 * Plugin URI:        https://github.com/ZeitOnline/zon-big-share-buttons
 * Description:       Big share buttons for ZON blogs with layout version 2015.
 * Version:           1.7
 * Author:            Thomas Strothjohann, Holger Wiebe
 * Author URI:        http://www.zeit.de
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * GitHub Plugin URI: https://github.com/ZeitOnline/zon-big-share-button
*/

function zon_big_share_scripts() {
    wp_enqueue_style( 'zon-big-share-styles', plugins_url( 'css/zon-wp-bigshare.css', __FILE__ ));
    wp_enqueue_script( 'zon-big-share', plugins_url( 'js/zon-big-share.js', __FILE__ ), array( 'jquery' ), '1.2.0', true );
}

add_action( 'wp_enqueue_scripts', 'zon_big_share_scripts' );
