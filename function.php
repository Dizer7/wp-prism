<?php
//Prism
// Function to add prism.css and prism.js to the site
function add_prism() {
	
	if ( is_single() && has_tag( 'code' ) ) {
    
    // Register prism.css file
    wp_register_style(
        'prismCSS', // handle name for the style 
        get_stylesheet_directory_uri() . '/assets/css/prism.css' // location of the prism.css file
    );

    // Register prism.js file
    wp_register_script(
        'prismJS', // handle name for the script 
        get_stylesheet_directory_uri() . '/assets/js/prism.js' // location of the prism.js file
    );

    // Enqueue the registered style and script files
    wp_enqueue_style('prismCSS');
    wp_enqueue_script('prismJS');
}
}
add_action('wp_enqueue_scripts', 'add_prism');
