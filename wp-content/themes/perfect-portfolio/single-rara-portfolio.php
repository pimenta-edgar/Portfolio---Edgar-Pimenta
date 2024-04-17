<?php
/**
 * The template for displaying all portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#custom-post-types
 *
 * @package Perfect_Portfolio
 */
get_header(); ?>
    <div class="tc-wrapper">
		<div class="wp-container-1 is-content-justification-left wp-block-buttons">
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-black-color has-text-color" href="https://edgarpimenta.pt/" style="border-radius:14px" target="_self" rel="noreferrer noopener">Voltar à página inicial</a></div>
</div>
    	<div id="primary" class="content-area">
    	    <main id="main" class="site-main">
                <div class="gallery-wrap">
            		<?php
            		while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'portfolio' );

            		endwhile; // End of the loop.
                    ?>
                </div><!-- .gallery-wrap -->
                <?php 
                    /**
                     * @hooked perfect_portfolio_single_portfolio_related_posts - 10
                     * @hooked perfect_portfolio_comment                        - 20
                    */
                    do_action( 'perfect_portfolio_after_portfolio_content' );
                ?>            
        	</main><!-- #main -->
    	</div><!-- #primary -->
    </div>
<?php 
get_footer();
