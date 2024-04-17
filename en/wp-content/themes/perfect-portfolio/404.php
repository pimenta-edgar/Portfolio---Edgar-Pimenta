<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Perfect_Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="tc-wrapper">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><span><?php esc_html_e( '404.', 'perfect-portfolio' ); ?></span></h1>
					</header><!-- .page-header -->
					<div class="page-content">
						<h3><?php esc_html_e( 'A página que procura não existe.', 'perfect-portfolio' ); ?></h3>					
					
					 <a href="<?php echo "http://edgarpimenta.pt"; ?>">
						<p><?php esc_html_e( 'Voltar à página inicial.', 'perfect-portfolio' ); ?></p> </a>
						
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_footer();