<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();

if ( have_posts() ) :
?>	
	<header class="page-header">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'researcherth' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
?>
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'researcherth' ); ?></h1>
		</header><!-- /.entry-header -->
		<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'researcherth' ); ?></p>
		<?php
			get_search_form();
		?>
	</article><!-- /#post-0 -->
<?php
endif;
wp_reset_postdata(); // end of the loop.

get_footer();
