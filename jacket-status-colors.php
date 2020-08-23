<?php
/*
Plugin Name: Jacket Status Colors
Plugin URI: https://github.com/bhsjacket/jacket-status-colors
Author: Jerome Paulos
Author URI: https://jeromepaulos.com
*/

function jacket_registerStatusCSS($hook) {
    if( $hook === 'edit.php' && get_post_type() === 'post' ) {
        wp_enqueue_style( 'jacket-status-colors', plugin_dir_url(__FILE__) . 'jacket-status-colors.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'jacket_registerStatusCSS' );