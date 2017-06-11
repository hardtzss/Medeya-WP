<?php
/*
Template Name: All doctors
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

        <!-- Title Line -->
        <section class="title_line_box">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <h2 class="title_line"><?php the_field('doc_page_main_title'); ?></h2>
                </div>
            </div>
        </section>
        <!-- Title Line End -->

    	<!-- All Doctors -->
        <section class="all_doctors">
            <div class="row">


                <div class="new_query">    
                <?php $arg = array(
                    'post_type'     => 'doctors_page',
                    'order'      => 'ASC',
                    'orderby'     => 'menu_order',
                    'posts_per_page'    => -1
                );
                $the_query = new WP_Query( $arg );
                if ( $the_query->have_posts() ) : ?>
                    <div id="post-type" class="post-type">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?><!-- BEGIN of Post -->
                            
                            <div class="columns small-12 medium-6 large-3 docs_m">
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

            </div>
        </section>
        <!-- All Doctors End -->
            
    </div>
    <!-- Content End -->

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>     
<?php get_footer(); ?>