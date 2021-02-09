<?php
/**
 * The template for displaying content in the index.php template
 */
?>

<article>	
	<a  href="<?php the_permalink(); ?>" >
		<?php
			if ( has_post_thumbnail() ){
				echo '<div class="post-thumbnail-2-3" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'large' )  . ')"></div>';
			}
		?>
	</a>
	<div class='mt-3'>
		<div><?php the_category(', '); ?></div>
		<a  href="<?php the_permalink(); ?>" ><h5 class="mt-2 entry-title text-dark mb-0"><?php the_title(); ?></h5></a>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta mt-2">
				<?php
					researcherth_article_posted_on();
				?>
			</div>
		<?php endif; ?>
	</div>
</article>
