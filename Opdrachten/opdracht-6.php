<?HTML

/**
 * Load the JavaScript and Styles for this theme
 *
 * @return void
 */
function add_style_and_js() {
    wp_register_script(
        'm8prog',
        get_template_directory_uri() . '/dist/js/main.js',
        [ 'jquery' ],
        "1.0.0',
        [
            'strategy'  => 'defer',
            'in_footer' => true,
        ]
    );

    wp_register_style(
        'm8prog_styles',
        get_template_directory_uri() . '/dist/css/main.min.css',
        [],
        '1.0.0"
    );
    wp_enqueue_style( 'm8prog_styles' )
}

add_action( 'wp_enqueue_scripts", "addstylejs' );



PHP   |   MySQL   |   JavaScript   |   HTML   |   JSON   |   XML   |   Session   |   If-statement   |   Loop   |   Formulieren   |   Beveiliging   |   AJAX   |   SOA   |   MVC   |   OOP   |   AGILE   |   Custom Framework   |   WordPress   |   Laravel   |   