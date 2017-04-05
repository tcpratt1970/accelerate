<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div> <!-- .container -->
</section> <!-- .home-page -->

<section class="featured-work">
	<div class="site-content">

			<ul class="homepage-featured-work">
				<h4>FEATURED WORK</h4>

				<?php query_posts('posts_per_page=3&post_type=case_studies&order=DESC'); ?>
						<?php while ( have_posts() ) : the_post();
								$image_1 = get_field("image_1");
								$size = "medium"; ?>

						<li class="individual-featured-work">
								<figure>
										<?php echo wp_get_attachment_image($image_1, $size); ?>
								</figure>

								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</li>
					<?php endwhile; ?> <!--end of the loop -->
					<?php wp_reset_query(); ?> <!--resets the altered query back to the original -->
				</ul>

		</div>
</section>

<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
			<?php endwhile; ?> <!--end of the loop -->
		<?php wp_reset_query(); ?> <!--resets the altered query back to the original -->

		<div class="twitter-feed">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<a class="follow-us-link" href="<?php the_permalink(); ?>">Follow Us <span>&rsaquo;</span></a>
	<?php endif; ?>


			</div>
 		</div>
	</div>
</section>

<?php get_footer(); ?>
