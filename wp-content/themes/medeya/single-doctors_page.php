<?php
/*
Template Name: Doctor single
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

		<!-- Doctor Single Name -->
        <section class="doc_single_name">
            <div class="single_doc_border">
                <div class="row ">
                    <div class="columns small-12 medium-12 large-12">
                        <div class="doctor_single_content_wrap">
                            <a href="#" class="doc_link">
                                <div class="item_title"><?php the_field('p_doc_name'); ?></div>
                            </a>
                            <div class="item_subtitle"><?php the_field('p_doc_spec'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="doc_single">
            <div class="row">

                <div class="columns small-12 medium-5 large-3">
                    <div class="doctor_item_wrap">
                        <div class="doc_avatar_wrap">
                            <img src="<?php the_field('p_doc_photo'); ?>" alt="Doc" class="doc_avatar">
                        </div>
                        <div class="doctor_single_content_wrap">
                            <a href="#" class="doc_link">
                                <div class="item_title"><?php the_field('p_doc_name'); ?></div>
                            </a>
                            <div class="item_subtitle"><?php the_field('p_doc_spec'); ?></div>
                            <button class="doc_btn trans">Button</button>
                        </div>
                    </div>
                </div>

                <div class="columns small-12 medium-7 large-9">
                    <div class="single_doc_content def_content"><?php the_content(); ?></div>
                </div>
            </div>
        </section>
        <!-- Doctor Single End -->
            
    </div>
    <!-- Content End -->

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>     
<?php get_footer(); ?>
		