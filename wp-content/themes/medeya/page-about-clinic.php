<?php
/*
Template Name: About clinic
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

		<!-- Title Line -->
        <section class="title_line_box">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <h2 class="title_line"><?php the_field('clinic_main_title'); ?></h2>
                </div>
            </div>
        </section>
        <!-- Title Line End -->

        <section class="clinic_main_content_wrap section_padd">
            
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <div class="clinic_main_content">
                        <?php the_field('clinic_main_content'); ?>
                    </div>
                </div>
            </div>
            
        </section>
            
        </div>
        <!-- Content End -->

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>		
<?php get_footer(); ?>
