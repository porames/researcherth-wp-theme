<?php
/**
 * The default template for displaying content
 *
 */
?>

<article style="max-width: 720px" class="article-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() ) : ?>
			<hgroup>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'researcherth' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<h3 class="entry-format"><?php _e( 'Featured', 'researcherth' ); ?></h3>
			</hgroup>
		<?php else : ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'researcherth' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php researcherth_article_posted_on(); ?>
			</div><!-- /.entry-meta -->
		<?php endif; ?>
	</header><!-- /.entry-header -->
	
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- /.entry-summary -->
	<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'researcherth' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'researcherth' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- /.entry-content -->
	<?php endif; ?>
		
	<footer class="entry-meta">
		<?php
			$show_sep = false;
			if ( 'post' === get_post_type() ) : // Hide category and tag text for pages on Search

				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'researcherth' ) );
				if ( $categories_list ) :
			?>
					<span class="cat-links">
						<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'researcherth' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
						$show_sep = true; ?>
					</span>
			<?php
				endif; // End if $categories_list

				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'researcherth' ) );
				if ( $tags_list ) :
					if ( $show_sep ) :
			?>
					<span class="sep"> | </span>
				<?php
					endif; // End if $show_sep
				?>
					<span class="tag-links">
						<?php
							printf( __( '<span class="%1$s">Tagged</span> %2$s', 'researcherth' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
							$show_sep = true;
						?>
					</span>
				<?php
				endif; // End if $tags_list
			endif; // End if 'post' == get_post_type()
		?>
	
		<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
				<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link">
				<?php
					printf( __( 'Leave a comment', 'researcherth' ), get_the_title() );
				?>
			</span>
		<?php endif; // End if comments_open() ?>
		
		<a href="<?php echo get_the_permalink(); ?>" class="btn btn-secondary"><?php _e( 'hacked', 'researcherth' ); ?></a>
		
		<?php edit_post_link( __( 'Edit', 'researcherth' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- /.entry-meta -->
</article><!-- /#post-<?php the_ID(); ?> -->
