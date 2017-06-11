<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

		<!-- Title Line -->
        <section class="title_line_box">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <h2 class="title_line"><?php the_field('contact_main_title'); ?></h2>
                </div>
            </div>
        </section>
        <!-- Title Line End -->

        <!-- Contacts -->
        <section class="contacts section_padd">
            <div class="row">

                <div class="columns small-12 medium-6 large-6">
                    <div class="section_title"><?php the_field('contact_first_title'); ?></div>
                    <div class="contact_content def_content"><?php the_field('contact_content'); ?></div>
                    <div class="section_title"><?php the_field('contact_second_title'); ?></div>

                    <ul class="contacts_list">
                        <li class="contact_item contant_addres">
                            <i class="fa fa-map-marker contact_icon contant_addres_icon" aria-hidden="true"></i>
                            <span class="def_content"><?php the_field('contact_addres'); ?></span>
                        </li>
                    
                        <li class="contact_item contant_mail">
                            <i class="fa fa-envelope-o contact_icon contant_mail_icon" aria-hidden="true"></i>
                            <span>
                                <a class="contant_mail_link trans" href="#"><?php the_field('contact_mail'); ?></a>
                            </span>
                        </li>

                        <li class="contact_item contant_phone">
                            <i class="fa fa-mobile contact_icon contant_phone_icon" aria-hidden="true"></i>
                            <span class="def_content"><?php the_field('contact_phone'); ?></span>
                        </li>
                    </ul>

                </div>

                <div class="columns small-12 medium-6 large-6">
                     <div class="section_title"><?php the_field('contact_third_title'); ?></div>
                     <div class="contact_form_wrap">
                         <!-- <div id="contact_form" class="contact_form">
                             <input class="contact_form_field cf_name" type="text" placeholder="Your name">
                             <input class="contact_form_field cf_mail" type="email" placeholder="Your email">
                             <textarea class="contact_form_field cf_message" placeholder="Your message"></textarea>
                             <input class="cf_send_btn trans" type="submit" value="Make an Appointment">
                         </div> -->
                         <?php echo do_shortcode ('[contact-form-7 id="125" title="Контактная форма" html_class="contact_form"]'); ?>
                     </div>
                </div>
            </div>
        </section>
        <!-- Contacts End -->

        <!-- Google Map -->
        <section class="google_map">
            <div id="map" class="map"></div>
        </section>

    </div>
    <!-- Content End -->

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>     
<?php get_footer(); ?>		