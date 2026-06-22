<?php

function apros_encolar_assets() {
    if ( ! is_page( 'servicios-apros' ) ) {
        return;
    }

    wp_enqueue_style(
        'apros-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    $version_css = filemtime( get_template_directory() . '/assets/css/landing.css' );
    $version_js  = filemtime( get_template_directory() . '/assets/js/servicios.js' );

    wp_enqueue_style(
        'apros-landing',
        get_template_directory_uri() . '/assets/css/landing.css',
        [ 'apros-fonts' ],
        $version_css
    );

    wp_enqueue_script(
        'apros-servicios',
        get_template_directory_uri() . '/assets/js/servicios.js',
        [],
        $version_js,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'apros_encolar_assets' );
