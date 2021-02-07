<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>
<div class="mt-3 mb-5 container">
	<h2 class='entry-title text-center'>อ่านเพิ่มเติม</h2>
	<div class='row mt-4'>
	<?php
		if ( $prev_post ) {
			$prev_title = get_the_title( $prev_post->ID );
	?>
		<div class='col-md-4'>
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>">									
					<div class='thumbnail-large mb-3' style="background-image: url(<?php echo get_the_post_thumbnail_url( $prev_post->ID, 'large' ) ?>)"></div>
					<h5 class="entry-title"><?php echo wp_kses_post( $prev_title ); ?></h5>									
			</a>
		</div>		
	<?php
		}
		if ( $next_post ) {
			$next_title = get_the_title( $next_post->ID );
	?>		
	<div class='col-md-4'>
		<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>">								
			<div class='thumbnail-large mb-3' style="background-image: url(<?php echo get_the_post_thumbnail_url( $next_post->ID, 'large' ) ?>)"></div>
			<h5 class="entry-title"><?php echo wp_kses_post( $next_title ); ?></h5>								
		</a>
	</div>			
	</div>
	<?php
		}
	?>
</div><!-- /.post-navigation -->
<?php
endif;

get_footer();
