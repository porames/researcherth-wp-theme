<?php
/**
 * The template for displaying content in the single.php template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
	echo '<header class="entry-header" style="position: relative; background-image: url(' . get_the_post_thumbnail_url( get_the_ID(), 'large' ) . ')">' 
?>
	<div class='overlay'></div>
		<div class='container text-center text-white' style='z-index: 2'>		
		<span>
		<?php
			$category_list = get_the_category_list( __( ', ', 'researcherth' ) );
			echo $category_list;
		?>
		</span>
		<h1 class="entry-title mt-3"><?php the_title(); ?></h1>		
		<?php
			if ( 'post' == get_post_type() ) :
		?>
			<div class="entry-meta">
				<?php researcherth_article_posted_on(); ?>
			</div><!-- /.entry-meta -->
		<?php
			endif;
		?>
		</div>
	</header><!-- /.entry-header -->
	
	<div class="pt-4 entry-content article-container container">
		<?php
			the_content();
		?>
		<footer class="entry-meta">
		<hr>
		<h6 class='entry-title text-black-50'>แชร์บทความนี้</h6>
		<div class='social-group mt-3'>
			<a target='_blank' href='https://facebook.com'>
				<div class='social-logo' style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg)"></div>
			</a>
			<a target='_blank' href='https://twitter.com'>
				<div class='social-logo' style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg)"></div>
			</a>
		</div>
		</footer>
		<!-- /.entry-meta -->
	</div>
	
	

	
	
</article>
<!-- /#post-<?php the_ID(); ?> -->