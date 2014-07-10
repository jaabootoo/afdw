<?php

function ct_ignite_child_load_extra_fonts() {
    wp_register_style( 'ct-ignite-plus-child-google-fonts', '//fonts.googleapis.com/css?family=Lato:400,700');
    if(! is_admin() ) wp_enqueue_style('ct-ignite-plus-child-google-fonts');
}
add_action('wp_enqueue_scripts', 'ct_ignite_child_load_extra_fonts' );
