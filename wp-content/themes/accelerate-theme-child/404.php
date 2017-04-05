<?php
/**
 * The template for displaying the 404 page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

        <div id="primary">
          <section-class="404-page">
                <div id="content" class="site-content" role="main">

                        <header class="page-header">
                                <h1 class="not-found"><?php _e( 'Not Found', 'accelerate-theme-child' ); ?></h1>
                        </header>

                        <div class="page-wrapper">
                                <div class="page-content">
                                        <h2><?php _e( 'I do say, this is rather embarrassing!', 'accelerate-theme-child' ); ?></h2>
                                        <p><?php _e( 'It seems as though what you were looking for could not be found here.  Perhaps you should <span style="color:#45ac9d";>Accelerate</span> back to our home page and try again?', 'accelerate-theme-child' ); ?></p>
                                        <a class="home-button" href="<?php echo home_url(); ?>/homepage">Home</a>
                                </div><!--.page-content -->
                        </div><!-- .page-wrapper -->

                </div><!-- #content -->
        </div><!-- #primary -->

<?php get_footer(); ?>
