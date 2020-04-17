<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header role="banner" class="page-header">
						<p><a class="image-404" href="https://etudiants-caweb.u-strasbg.fr/miniprojets/1920/igp_jumelage/wordpress/wp-content/themes/Aagaz-Startup-Child"></p>
					</header>
					<div class="page-content">
						
						<p><?php echo esc_html(get_theme_mod('aagaz_startup_page_not_found_content',__('It looks like nothing was found at this location. Maybe try a search?','aagaz-startup')));?></p>
						<?php get_search_form(); ?>
					</div>
				</section>
			</main>
		</div>
	</div>
</div>

<?php get_footer();
