			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class='text-white'>
			<div class="container">								
				<img class='mb-2' height='24px' id='researcher-logo-footer' src="<?php echo get_template_directory_uri(); ?>/assets/images/the-researcher-logo-white.svg" alt="Logo Footer" />
				<hr style='border-top: 1px solid rgb(255 255 255 / 20%)'/>
				<span class='mb-0'><?php printf( __( '&copy; %1$s. All rights reserved.', 'researcherth' ), esc_attr( date_i18n( 'Y' ) ) ); ?></span>		
				<?php
					if ( has_nav_menu( 'footer-menu' ) ) : // see function register_nav_menus() in functions.php
						/*
							Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
							Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
							!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
						*/
						wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu',
								'container'       => 'nav',
								'container_class' => 'col-md-6',
								'fallback_cb'     => '',
								'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
								//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
								'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
							)
						);
					endif;

					if ( is_active_sidebar( 'third_widget_area' ) ) :
				?>
				<?php
					endif;
				?>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
