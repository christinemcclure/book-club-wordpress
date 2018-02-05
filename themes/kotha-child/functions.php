// load css into the website's front-end
function kotha_enqueue_style() {
    wp_enqueue_style( 'kotha-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'kotha_enqueue_style' );
