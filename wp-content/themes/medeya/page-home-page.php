<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<!-- Main Slider -->
	<section class="main_slider_wrap">

		<?php if( have_rows('main_slider_repeater') ): ?>
			<div id="main_slider" class="main_slider">	
				<?php while( have_rows('main_slider_repeater') ): the_row(); 

				// vars
				$main_slider_img = get_sub_field('main_slider_img');
				$main_slider_content = get_sub_field('main_slider_content');

				?>

					<div style="background-image: url('<?php echo $main_slider_img; ?>')" class="slide cover">
						<div class="row">

							<div class="columns small-12 medium-6 large-6">
								<div class="slider_content_wrap">
									<h2 class="slider_content"><?php echo $main_slider_content; ?></h2>
								</div>
							</div>

						</div>
					</div>

				<?php endwhile; ?>		
			</div>
		<?php endif; ?>

	</section>
	<!-- Main Slider End -->

	<!-- Medical Clinic -->
	<section class="medical_clinic hr section_padd">
		<div class="row">

			<div class="columns small-12 medium-12 large-12">
				<p class="section_theme"><?php the_field('first_clinic_title'); ?></p>
				<h3 class="section_title"><?php the_field('second_clinic_title'); ?></h3>
			</div>

			<div class="columns small-12 medium-6 large-5">
				<div style="background-image: url('<?php the_field('clinic_section_img'); ?>')" class="cover clinic_img img_pab" alt="1"></div>
			</div>
			
			<div class="columns small-12 medium-6 large-7">
				<h4 class="section_subtitle"><?php the_field('third_clinic_title'); ?></h4>
				<p class="def_content"><?php the_field('section_clinic_content'); ?></p>
			</div>

		</div>
	</section>	
	<!-- Medical Clinic -->

	<!-- Our Services -->
	<section style="background-image: url('<?php the_field('services_bg'); ?>')" class="our_services hr section_padd cover">
		<div class="row">
			<div class="columns small-12 medium-12 large-12">

				<div class="our_services_title_wrap">
					<p class="section_theme"><?php the_field('services_first_title'); ?></p>
					<h3 class="section_title"><?php the_field('services_second_title'); ?></h3>
					<div class="slider_arrows_wrap">
						<div class="slider_btn_prev trans">
							<i class="fa fa-arrow-left slide_control trans" aria-hidden="true"></i>
						</div>
						<div class="slider_btn_next trans">
							<i class="fa fa-arrow-right slide_control trans" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				
			</div>

			<div class="columns small-12 medium-12 large-12">

			<?php if( have_rows('services_slide_repeater') ): ?>
				<div id="services_slider" class="services_slider">

					<?php while( have_rows('services_slide_repeater') ): the_row(); 

					// vars
					$serv_slide_img = get_sub_field('serv_slide_img');
					$serv_slide_title = get_sub_field('serv_slide_title');
					$serv_slide_content = get_sub_field('serv_slide_content');

					?>		
							<div class="slide">
								<div class="slide_inner">
									<div class="our_services_img_wrap">
										<img src="<?php echo $serv_slide_img; ?>" alt="slide 1" class="our_services_img">
									</div>
									<div class="slide_content_wrap">
										<div class="item_title hr"><?php echo $serv_slide_title; ?></div>
										<div class="def_content"><?php echo $serv_slide_content; ?></div>
									</div>
								</div>
							</div>

					<?php endwhile; ?>

				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- Our Services End -->

	<!-- Our Doctors -->
	<section class="our_doctors section_padd">
		<div class="row">

			<div class="columns small-12 medium-12 large-8">
				<p class="section_theme"><?php the_field('doc_sec_first_title'); ?></p>
				<h3 class="section_title"><?php the_field('doc_sec_second_title'); ?></h3>
				<div class="row">

				<div class="new_query">    
                <?php 

                $arg = array(
                    'post_type'     => 'doctors_page',
                    'order'      => 'ASC',
                    'orderby'     => 'date',
                    'posts_per_page'    => 6
                );
                $the_query = new WP_Query( $arg );
                if ( $the_query->have_posts() ) : ?>
                    <div id="post-type" class="post-type">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?><!-- BEGIN of Post -->
                            
                            <div class="columns small-12 medium-6 large-4 docs_m">
                                <div class="doctor_item_wrap">
                                    <div class="doc_avatar_wrap">
                                    	
                                    	<a href="<?php the_permalink(); ?>">

                                    		<div style="background-image: url('<?php the_field('p_doc_photo'); ?>')" class="cover doc_avatar img_pab" alt="1">
                                    			<div class="box_hover trans">
                                    				<div class="icon_hover_wrap">
                                    					<i class="icon ion-ios-eye"></i>
                                    				</div>
                                    			</div>
                                    		</div>

                                    	</a>
                                    </div>
                                    <div class="doctor_content_wrap">
                                        <a href="<?php the_permalink(); ?>" class="doc_link">
                                            <div class="item_title"><?php the_field('p_doc_name'); ?></div>
                                        </a>
                                        <div class="item_subtitle"><?php the_field('p_doc_spec'); ?></div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?><!-- END of Post -->
                    </div><!-- END of .post-type -->
                <?php endif; wp_reset_query(); ?>
                </div>

					<div class="columns small-12 medium-12 large-12">
						<div class="show_all_doctors_wrap">
							<a class="show_all_doctors trans" href="<?php the_field('show_all_docs_link'); ?>">
								<?php the_field('show_all_docs_link_text'); ?>
							</a>
							<i class="fa fa-long-arrow-right show_all_doctors_icon" aria-hidden="true"></i>
						</div>
					</div>
					
				</div>

			</div>

			<div class="columns small-12 medium-12 large-4">
				<div class="row">
					
					<div class="columns small-12 medium-12 large-12">
						<p class="section_theme"><?php the_field('doc_sec_third_title'); ?></p>
						<h3 class="section_title"><?php the_field('doc_sec_fourth_title'); ?></h3>
					</div>

					<div class="columns small-12 medium-12 large-12">

						<?php if( have_rows('sertific_repeater') ): ?>

							<?php while( have_rows('sertific_repeater') ): the_row(); 
							// vars
							$sertificate_img = get_sub_field('sertificate_img');
							?>

								<div class="certificate_wrap">
									<img src="<?php echo $sertificate_img; ?>" class="certificate_img">
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Doctors End -->
	
	<!-- Reviews -->
	<section style="background-image: url('<?php the_field('review_sec_bg'); ?>')" class="reviews cover parallax">

		<div class="reviews_inner">
			<div class="row">

				<div class="columns small-12 medium-12 large-12">

					<div class="reviews_title_wrap">
						<p class="section_theme"><?php the_field('review_first_title'); ?></p>
						<h3 class="section_title"><?php the_field('review_second_title'); ?></h3>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_1 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php the_field('review_photo_1'); ?>" alt="review 1" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name"><?php the_field('review_person_name_1'); ?></div>
									<div class="person_spec"><?php the_field('review_person_spec_1'); ?></div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_1">
								<p class="def_content"><?php the_field('review_content_1'); ?></p>
							</div>
						</div>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_2 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php the_field('review_photo_2'); ?>" alt="review 2" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name"><?php the_field('review_person_name_2'); ?></div>
									<div class="person_spec"><?php the_field('review_person_spec_2'); ?></div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_2">
								<p class="def_content"><?php the_field('review_content_1'); ?></p>
							</div>
						</div>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_3 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php the_field('review_photo_3'); ?>" alt="review 3" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name"><?php the_field('review_person_name_3'); ?></div>
									<div class="person_spec"><?php the_field('review_person_spec_3'); ?></div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_3">
								<p class="def_content"><?php the_field('review_content_3'); ?></p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		
	</section>
	<!-- Reviews End -->

	<!-- Partners -->
	<section class="partners">
		<div class="row">
			<div class="columns small-12 medium-12 large-12">
				<p class="section_title"><?php the_field('partner_title'); ?></p>
			</div>
			<div class="columns small-12 medium-12 large-12">
				<div class="partners_wrap clear_fix">

				<?php if( have_rows('partner_repeater') ): ?>

					<?php while( have_rows('partner_repeater') ): the_row(); 
						// vars
						$partner_img = get_sub_field('partner_img');
						?>

							<div class="partner_item">
								<img src="<?php echo $partner_img; ?>" alt="" class="partner_label">
							</div>

					<?php endwhile; ?>

				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Partners End -->
	
</div>
<!-- Content End -->


<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>
<?php get_footer(); ?>
