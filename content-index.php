<?php
/**
 * The template for displaying content in the index.php template
 */
?>

<a href="<?php the_permalink(); ?>" >
	<article id="post-<?php the_ID(); ?>">
		<div>
			<?php
				if ( has_post_thumbnail() ) :
					echo '<div class="post-thumbnail-2-3" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'large' )  . ')"></div>';
				endif;
				/*
				if ( is_search() ) :
					the_excerpt();
				endif;
				*/
			?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'researcherth' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div>
		<div>
			<h5 class="entry-title text-dark mt-3 mb-0"><?php the_title(); ?></h5>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta mt-2">
					<?php
						researcherth_article_posted_on();
					?>
				</div>
			<?php endif; ?>
		</div>
	</article>
</a>
