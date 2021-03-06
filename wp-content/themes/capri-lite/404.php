<?php
/**
 * 404 page template.
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @author Themeisle
 * @version 1.1.2
 * @package capri-pro
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="text-center">
			<main id="main" class="site-main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Страница не найдена', 'capri-lite' ); ?></h1>
					</header><!-- .page-header -->
					<div class="page-content">
						<p><?php esc_html_e( 'Возможно страница устарела и больше не существует. Вы можете использовать поиск по сайту.', 'capri-lite' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php
get_footer();
