
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<!-- Main Slider -->
	<section class="main_slider_wrap">

		<div id="main_slider" class="main_slider">
			<div class="slide slide_1 cover">
				<div class="row">

					<div class="columns small-12 medium-6 large-6">
						<div class="slider_content_wrap">
							<h2 class="slider_content">The Hospital of the Future, Today</h2>
						</div>
					</div>

				</div>
			</div>
			<div class="slide slide_2 cover"></div>
			<div class="slide slide_3 cover"></div>
			<div class="slide slide_4 cover"></div>
			<div class="slide slide_5 cover"></div>
		</div>

	</section>
	<!-- Main Slider End -->

	<!-- Medical Clinic -->
	<section class="medical_clinic hr section_padd">
		<div class="row">

			<div class="columns small-12 medium-12 large-12">
				<p class="section_theme">Professionals</p>
				<h3 class="section_title">Welcome to Medical Clinic</h3>
			</div>

			<div class="columns small-12 medium-6 large-5">
				<div class="clinic_img_wrap">
					<img src="<?php echo get_template_directory_uri();?>/img/clinic.jpg" class="clinic_img">
				</div>
			</div>
			
			<div class="columns small-12 medium-6 large-7">
				<h4 class="section_subtitle">Who we are?</h4>
				<p class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, dolorum totam reprehenderit modi libero ullam deleniti ex optio quam quasi? Labore ipsum eaque quidem inventore corporis ab impedit voluptas quo ullam deleniti officiis quam, odit explicabo quas animi, voluptatum neque, nisi eum. Quae perferendis quasi cupiditate totam, dolores enim rerum ipsum error, accusamus quod, in maiores. Commodi consequatur, assumenda temporibus id itaque, accusamus repudiandae enim molestias cupiditate nihil voluptatem nesciunt.</p>
			</div>

		</div>
	</section>	
	<!-- Medical Clinic -->


	<!-- Our Services -->
	<section class="our_services hr section_padd cov cover">
		<div class="row">

			<div class="columns small-12 medium-12 large-12">

				<div class="our_services_title_wrap">
					<p class="section_theme">Innovation</p>
					<h3 class="section_title">Our Services</h3>
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

				<div id="services_slider" class="services_slider">

					<div class="slide slide_1">
						<div class="slide_inner">
							<div class="our_services_img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/serv_laboratory.jpg" alt="slide 1" class="our_services_img">
							</div>
							<div class="slide_content_wrap">
								<div class="item_title hr">Laboratory Analysis</div>
								<div class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum distinctio quidem eius, natus facilis molestiae autem inventore a saepe itaque.</div>
							</div>
						</div>
					</div>

					<div class="slide slide_2">
						<div class="slide_inner">
							<div class="our_services_img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/serv_pediatric.jpg" height="330" width="480" alt="slide 2" class="our_services_img">
							</div>
							<div class="slide_content_wrap">
								<div class="item_title hr">Pediatric Clinic</div>
								<div class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum distinctio quidem eius, natus facilis molestiae autem inventore a saepe itaque.</div>
							</div>
						</div>
					</div>

					<div class="slide slide_3">
						<div class="slide_inner">
							<div class="our_services_img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/serv_laryngol.jpg" height="400" width="580" alt="slide 3" class="our_services_img">
							</div>
							<div class="slide_content_wrap">
								<div class="item_title hr">Laryngological Clinic</div>
								<div class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum distinctio quidem eius, natus facilis molestiae autem inventore a saepe itaque.</div>
							</div>
						</div>
					</div>

					<div class="slide slide_4">
						<div class="slide_inner">
							<div class="our_services_img_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/serv_outpatient.jpg" height="400" width="580" alt="slide 4" class="our_services_img">
							</div>
							<div class="slide_content_wrap">
								<div class="item_title hr">Outpatient Rehabilitation</div>
								<div class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum distinctio quidem eius, natus facilis molestiae autem inventore a saepe itaque.</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Our Services End -->

	<!-- Our Doctors -->
	<section class="our_doctors section_padd">
		<div class="row">

			<div class="columns small-12 medium-12 large-8">
				<p class="section_theme">Professionals</p>
				<h3 class="section_title">Our Doctors</h3>
				<div class="row">

					<div class="columns small-12 medium-4 large-4">
						<div class="doctor_item_wrap">
							<div class="doc_avatar_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/doc-1.jpg" alt="Doc" class="doc_avatar">
							</div>
							<div class="doctor_content_wrap">
								<div class="item_title">Dr. Michael Linden</div>
								<div class="item_subtitle">Throat Specialist</div>
							</div>
						</div>
					</div>

					<div class="columns small-12 medium-4 large-4">
						<div class="doctor_item_wrap">
							<div class="doc_avatar_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/doc-2.jpg" alt="Doc" class="doc_avatar">
							</div>
							<div class="doctor_content_wrap">
								<div class="item_title">Dr. Amy Adamsn</div>
								<div class="item_subtitle">Cardiologist</div>
							</div>
						</div>
					</div>

					<div class="columns small-12 medium-4 large-4">
						<div class="doctor_item_wrap">
							<div class="doc_avatar_wrap">
								<img src="<?php echo get_template_directory_uri();?>/img/doc-3.jpg" alt="Doc" class="doc_avatar">
							</div>
							<div class="doctor_content_wrap">
								<div class="item_title">Dr. Max Turner</div>
								<div class="item_subtitle">Throat Specialist</div>
							</div>
						</div>
					</div>

					<div class="columns small-12 medium-12 large-12">
						<div class="show_all_doctors_wrap">
							<a class="show_all_doctors trans" href="#">Show all doctors</a>
							<i class="fa fa-long-arrow-right show_all_doctors_icon" aria-hidden="true"></i>
						</div>
					</div>
					
				</div>
			</div>

			<div class="columns small-12 medium-12 large-4">
				<div class="row">
					
					<div class="columns small-12 medium-12 large-12">
						<p class="section_theme">Our Awards</p>
						<h3 class="section_title">Сertificates</h3>
					</div>

					<div class="columns small-12 medium-12 large-12">
						<div class="certificate_wrap">
							<img src="<?php echo get_template_directory_uri();?>/img/certificate-1.jpg" height="600" width="772" class="certificate_img">
						</div>
						<div class="certificate_wrap">
							<img src="<?php echo get_template_directory_uri();?>/img/certificate-2.jpg" class="certificate_img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Doctors End -->
	
	<!-- Reviews -->
	<section class="reviews parallax-window" data-parallax="scroll" data-image-src="img/parallax.jpg">

		<div class="reviews_inner">
			<div class="row">

				<div class="columns small-12 medium-12 large-12">

					<div class="reviews_title_wrap">
						<p class="section_theme">Testimonials</p>
						<h3 class="section_title">What Our Clients Say</h3>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_1 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php echo get_template_directory_uri();?>/img/person-1.jpg" alt="review 1" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name">Daniel palmer</div>
									<div class="person_spec">Businessman</div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_1">
								<p class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis recusandae at aspernatur, reiciendis, magnam commodi nesciunt quisquam iste vitae id perspiciatis repudiandae. Possimus ratione, officiis recusandae dolorum. Veniam, tempora, est?</p>
							</div>
						</div>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_2 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php echo get_template_directory_uri();?>/img/person-2.jpg" alt="review 1" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name">Vanessa Adams</div>
									<div class="person_spec">Officer Cleaner</div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_2">
								<p class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis recusandae at aspernatur, reiciendis, magnam commodi nesciunt quisquam iste vitae id perspiciatis repudiandae. Possimus ratione, officiis recusandae dolorum. Veniam, tempora, est?</p>
							</div>
						</div>
					</div>

				</div>

				<div class="columns small-12 medium-4 large-4 sm_reviev">

					<div class="review_wrap">
						<div class="review_item">
							<div class="review_hearder header_bg_3 clear_fix">
								<div class="person_avatar_wrap">
									<img src="<?php echo get_template_directory_uri();?>/img/person-3.jpg" alt="review 1" class="person_avatar">
								</div>
								<div class="person_data_wrap">
									<div class="person_name">Henri Matisse</div>
									<div class="person_spec">Painter</div>
								</div>
							</div>
							<div class="review_content_wrap rw_cont_before_3">
								<p class="def_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis recusandae at aspernatur, reiciendis, magnam commodi nesciunt quisquam iste vitae id perspiciatis repudiandae. Possimus ratione, officiis recusandae dolorum. Veniam, tempora, est?</p>
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
				<p class="section_title">Partners</p>
			</div>
			<div class="columns small-12 medium-12 large-12">
				<div class="partners_wrap clear_fix">
					<div class="partner_item">
						<img src="<?php echo get_template_directory_uri();?>/img/partner-1.jpg" alt="" class="partner_label">
					</div>
					<div class="partner_item">
						<img src="<?php echo get_template_directory_uri();?>/img/partner-2.jpg" alt="" class="partner_label">
					</div>
					<div class="partner_item">
						<img src="<?php echo get_template_directory_uri();?>/img/partner-3.jpg" alt="" class="partner_label">
					</div>
					<div class="partner_item">
						<img src="<?php echo get_template_directory_uri();?>/img/partner-4.jpg" alt="" class="partner_label">
					</div>
					<div class="partner_item">
						<img src="<?php echo get_template_directory_uri();?>/img/partner-5.jpg" alt="" class="partner_label">
					</div>
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
