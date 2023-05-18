<?php
// Pour utiliser cette ressource en front,
// … mon script a besoin de connaître l'URL d'adminAjax…
// … pour le pousser dans la variable url !
add_action( 'wp_enqueue_scripts', 'myenqueue' );
function myenqueue() {
	wp_enqueue_script( 'mon-script-ajax', get_template_directory_uri() . '/js/script.js', array('jquery') );
	wp_localize_script( 'mon-script-ajax', 'adminAjax', admin_url( 'admin-ajax.php' ) );
}

// J'utilise les hooks
add_action( 'wp_ajax_get_my_post', 'myfunction' );
add_action( 'wp_ajax_nopriv_get_my_post', 'myfunction' );
function myfunction() {
    try{
        // Je convertis l'url de l'article en ID
        // je renvois l'id de l'article
        wp_send_json_success( 'success');
    }catch{
        // renvoie une erreur
        wp_send_json_error( 'er' );
    }
}