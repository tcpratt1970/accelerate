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
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-text">
								<h3><?php 'the_content'(); ?></h3>
				</div>
			<?php endwhile;  //end of the loop. ?>
</section>


<section class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
						<?php $size = "full";
						$service_header = get_field('service_header');
						$service_intro = get_field('service_intro');
						$icon_1 = get_field('icon_1');
						$icon_2 = get_field('icon_2');
						$icon_3 = get_field('icon_3');
						$icon_4 = get_field('icon_4');
						$title_1 = get_field('title_1');
						$title_2 = get_field('title_2');
						$title_3 = get_field('title_3');
						$title_4 = get_field('title_4');
						$description_1 = get_field('description_1');
						$description_2 = get_field('description_2');
						$description_3 = get_field('description_3');
						$description_4 = get_field('description_4');
						$work_with_us = get_field('work_with_us'); ?>

							<div class="intro">
									<h3><?php echo $service_header; ?></h3>
									<p><?php echo $service_intro; ?></p>
								</div>

									<section class="about-section">
										<figure class="service-icon-align-left">
											<?php echo wp_get_attachment_image( $icon_1, $size ); ?>
										</figure>
										<div class="service-description-align-left">
												<h2><?php echo $title_1; ?></h2>
												<p><?php echo $description_1; ?></p>
										</div>
									</section>

									<section class="about-section">
										<figure class="service-icon-align-right">
											<?php echo wp_get_attachment_image( $icon_2, $size ); ?>
										</figure>
										<div class="service-description-align-right">
												<h2><?php echo $title_2; ?></h2>
												<p><?php echo $description_2; ?></p>
										</div>
									</section>

									<section class="about-section">
										<figure class="service-icon-align-left">
											<?php echo wp_get_attachment_image( $icon_3, $size ); ?>
										</figure>
										<div class="service-description-align-left">
												<h2><?php echo $title_3; ?></h2>
					              <p><?php echo $description_3; ?></p>
					          </div>
									</section>

									<section class="about-section">
											<figure class="service-icon-align-right">
												<?php echo wp_get_attachment_image( $icon_4, $size ); ?>
											</figure>
											<div class="service-description-align-right">
													<h2><?php echo $title_4; ?></h2>
					              	<p><?php echo $description_4; ?></p>
					           </div>
									</section>

										<div class="outro">
												<div class="work-with-us">
								        <h2><?php echo $work_with_us; ?></h2>
										</div>
									</div>
												<a class="contact-button" href="<?php echo home_url(); ?>contact-us">Contact Us</a>

								    <?php endwhile; // end of the loop. ?>

		</div><!-- .container -->
</section><!-- .about-page -->

<?php get_footer(); ?>
