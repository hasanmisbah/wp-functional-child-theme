<?php
// custom post type called editor note

function create_posttype() {
     
    
        register_post_type( 'Editor Note',
     
        array(
            'labels' => array(
                'name' => __( 'Editor Note' ),
                'singular_name' => __( 'Editor Note' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor' ),
            'taxonomies' => array('series',  'category' ),
            'rewrite' => array('slug' => 'Editor Note'),
        )
    );
}
add_action( 'init', 'create_posttype' );

?>