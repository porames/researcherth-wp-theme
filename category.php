
<?php
/**
 * The Template for displaying Category Archive pages.
 */
get_header();
if ( have_posts() ) :
?>
	<div class='featured-posts mb-5'>
		<div class='container'>						
			<div class='text-center' >
				<h1 class='entry-title'><?php printf( __( '%s', 'researcherth' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>				
				<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) ) {
					echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
				}
				?>
				
			</div>
		</div>
		
	</div>	
<div class='container'>
<?php
	get_template_part( 'archive', 'loop' );
else :
	get_template_part( 'content', 'none' );
endif;
	wp_reset_postdata();
?>
</div>
<?php get_footer(); ?>
