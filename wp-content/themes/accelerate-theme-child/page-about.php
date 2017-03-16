<?php
/**
 * The template for displaying the About page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
		<div class='homepage-hero'>
			  <?php the_content(); ?>
								<h2><span class="about-co"><span style="color:#45ac9d";>Accelerate</span> is a strategy and marketing agency located in the heart of NYC.
												Our goal is to build businesses by making our clients visable and making their customers smile.</span></h2>
											</div>

						<div class="site-content">

				<?php $size = "full"; ?>

				<?php while ( have_posts() ) : the_post();

						$description_1 = get_field('description_1');
						$description_2 = get_field('description_2');
						$description_3 = get_field('description_3');
						$description_4 = get_field('description_4');
		        $icon_1 = get_field('icon_1');
		        $icon_2 = get_field('icon_2');
		        $icon_3 = get_field('icon_3');
						$icon_4 = get_field('icon_4'); ?>

							<div class="about-services">
									<h3>Our Services</h3>
									<br/>
									<p>We take pride in our clients and the content we create for them.</p>
									<p>Here is a brief overview of our services.</p>
								</div>

									<div class="services">
											<div class="icon-1">
												<?php if($icon_1) { ?>
														<?php echo wp_get_attachment_image( $icon_1, $size ); ?>
												<?php } ?>
											</div>

											<div class="content-strategy">
					                <h2>Content Strategy</h2>
					                <?php echo $description_1; ?>
					            </div>

											<div class="influencer-mapping">
					                <h2>Influencer Mapping</h2>
					                <?php echo $description_2; ?>
					            </div>

											<div class="icon-2">
												<?php if($icon_2) { ?>
														<?php echo wp_get_attachment_image( $icon_2, $size ); ?>
												<?php } ?>
											</div>

											<div class="icon-3">
												<?php if($icon_3) { ?>
														<?php echo wp_get_attachment_image( $icon_3, $size ); ?>
												<?php } ?>
											</div>

											<div class="social-media-strategy">
					                <h2>Social Media Strategy</h2>
					                <?php echo $description_3; ?>
					            </div>

											<div class="design-development">
					                <h2>Design & Development</h2>
					                <?php echo $description_4; ?>
					            </div>

											<div class="icon-4">
												<?php if($icon_4) { ?>
														<?php echo wp_get_attachment_image( $icon_4, $size ); ?>
												<?php } ?>
											</div>
										</div>

										<div class="work-with-us">
								        <h2 class="interested">Interested in working with us?</h2>
								        <a class="contact-button" href="<?php echo home_url(); ?>contact-us">Contact Us</a>
								    </div>

								    <?php endwhile; // end of the loop. ?>

		</div><!-- .container -->
</section><!-- .about-page -->

<?php get_footer(); ?>
