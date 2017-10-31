<?php 

   add_filter( 'the_author', 'guest_author_name' );
   add_filter( 'get_the_author_display_name', 'guest_author_name' );
    function guest_author_name( $name ) {
        global $post;
        $author = get_post_meta( $post->ID, 'লেখক', true );
        $acf_author = "";
    if ( $author )
        $name = $author;
        return $name;
    }



?>