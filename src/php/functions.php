<?php 



// Loading required Plugin

//require 'plugin.php';


// Custom Functions to write
// 








// re writing Color mag entry meta functions
if(! function_exists( 'colormag_entry_meta' )){
	function colormag_entry_meta() {
	   if ( 'post' == get_post_type() ) :
	   	echo '<div class="below-entry-meta">';
	   	?>

	      <?php
	      $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	      if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	         $time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	      }
	      $time_string = sprintf( $time_string,
	         esc_attr( get_the_date( 'c' ) ),
	         esc_html( get_the_date() ),
	         esc_attr( get_the_modified_date( 'c' ) ),
	         esc_html( get_the_modified_date() )
	      );
	   	printf( __( '<span class="posted-on"><a href="%1$s" title="%2$s" rel="bookmark"><i class="fa fa-calendar-o"></i> %3$s</a></span>', 'colormag' ),
	   		esc_url( get_permalink() ),
	   		esc_attr( get_the_time() ),
	   		$time_string
	   	); ?>

	      <span class="by-line"><span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo get_the_author(); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span>

	      <?php
	      if ( ! post_password_required() && comments_open() ) { ?>
	         <span class="comments"><?php comments_popup_link( __( '<i class="fa fa-comment"></i> 0 Comments', 'colormag' ), __( '<i class="fa fa-comment"></i> 1 Comment', 'colormag' ), __( '<i class="fa fa-comments"></i> % Comments', 'colormag' ) ); ?></span>
	      <?php }
	   	$tags_list = get_the_tag_list( '<span class="tag-links"><i class="fa fa-tags"></i>', __( ', ', 'colormag' ), '</span>' );
	   	if ( $tags_list ) echo $tags_list;

	   	edit_post_link( __( 'Edit', 'colormag' ), '<span class="edit-link"><i class="fa fa-edit"></i>', '</span>' );

	   	echo '</div>';
	   endif;
	}
}

// re writing footer

if(! function_exists( 'colormag_footer_copyright' )){
	function colormag_footer_copyright() {
	   $site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

	   $wp_link = '<a href="https://wordpress.org" target="_blank" title="' . esc_attr__( 'WordPress', 'colormag' ) . '"><span>' . __( 'WordPress', 'colormag' ) . '</span></a>';

	   $tg_link =  '<a href="https://hasanmisbah.com" target="_blank" title="'.esc_attr__( 'Hasan Misbah', 'colormag' ).'" rel="designer"><span>'.__( 'Hasan Misbah', 'colormag') .'</span></a>';

	   $default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s. All rights reserved.', 'colormag' ), date( 'Y' ), $site_link ).'<br>'.sprintf( __( '%1$s Design and Developed By :  %2$s.', 'colormag' ), ' ', $tg_link );

	   $colormag_footer_copyright = '<div class="copyright">'.$default_footer_value.'</div>';
	   echo $colormag_footer_copyright;
	}
}



?>