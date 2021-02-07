<?php
/**
 * The template for displaying the archive loop
 */

researcherth_content_nav( 'nav-above' );

if ( have_posts() ) :
?>
	<div class="row">
<?php
	$i=0;
	while ( have_posts() ) :
		the_post();

		/**
		 * Include the Post-Format-specific template for the content.
		 * If you want to overload this in a child theme then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */		
		echo "<div class='col-md-4 mb-5'>";		
		get_template_part( 'content', 'index' );
		echo "</div>";
		$i++;
	endwhile;
?>
	</div>
<?php
endif;

wp_reset_postdata();

researcherth_content_nav( 'nav-below' );
