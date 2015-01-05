<?php 
/*
Plugin Name: Fixed Widget Area
Plugin URI: 
Description: Fix widget Area on right side while scrolling and drag widget easily.
Version: 1.0.0
Author: biztechc
Author URI: https://profiles.wordpress.org/biztechc/
License: GPLv2
*/ ?>
<?php   
add_action( 'admin_footer', 'bc_fix_widget' ); 

function bc_fix_widget()
{   
    $current_screen = get_current_screen();
    if($current_screen->base=='widgets')
    {
        wp_enqueue_script( 'fixwidget', plugins_url( 'js/fixwidget.js', __FILE__ ), array(), '1.0.0', true );
    }    
}
?>