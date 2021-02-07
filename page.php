<?php
/**
 * Template Name: Page (Default)
 *
 */

get_header();

the_post();
?>
<div class="container">
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
				the_content();
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'researcherth' ),
					'after'  => '</div>',
				) );
				edit_post_link( __( 'Edit', 'researcherth' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- /#post-<?php the_ID(); ?> -->
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
</div><!-- /.row -->
<?php
get_footer();
