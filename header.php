<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&family=Sarabun:wght@400;600&display=swap" rel="stylesheet"/>
	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'nav-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'researcherth' ); ?></a>

<div id="wrapper">

	<header>
		<nav id="header" class="navbar navbar-expand-md text-white <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' );
						if ( ! empty( $header_logo ) ) :
					?>
						<img id='researcher-logo' src="<?php echo get_template_directory_uri(); ?>/assets/images/the-researcher-logo-black.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'researcherth' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navbar" class="collapse navbar-collapse">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
							<form class="d-none form-inline search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" id="s" name="s" class="form-control mr-sm-2" placeholder="<?php _e( 'Search', 'researcherth' ); ?>" title="<?php echo esc_attr( __( 'Search', 'researcherth' ) ); ?>" />
								<button type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary my-2 my-sm-0"><?php _e( 'Search', 'researcherth' ); ?></button>
							</form>
					<?php
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
	<script>
	
	window.addEventListener("scroll", function(){		
		const navHead = document.getElementById('header')
		if(window.scrollY<40){			
			navHead.classList.remove('bg-white')
			navHead.classList.remove('elevation-1')
			navHead.classList.add('bg-transparent')
			navHead.classList.add('text-white')
			navHead.classList.remove('text-dark')
		}
		else{
			navHead.classList.add('bg-white')
			navHead.classList.add('elevation-1')
			navHead.classList.add('text-dark')
			navHead.classList.remove('bg-transparent')
			navHead.classList.remove('text-white')
		}
	})
	</script>
	<main>
		
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>

		<?php
			endif;
		?>
