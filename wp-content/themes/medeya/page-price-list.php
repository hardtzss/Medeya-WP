<?php
/*
Template Name: Price list
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

        <!-- Title Line -->
        <section class="title_line_box">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <h2 class="title_line"><?php the_field('price_main_title'); ?></h2>
                </div>
            </div>
        </section>
        <!-- Title Line End -->

		<!-- Price List -->
        <section class="price_list_wrap">
            <div class="row">
                <div class="columns small-12 medium-10 medium-centered large-10 large-centered">

                    <div class="accordeon">
                        <div class="price_list_header"><?php the_field('price_title'); ?></div>
                        <ul class="accordeon_list">

                        <?php if( have_rows('add_prise_repeater') ): ?>
                            <?php while( have_rows('add_prise_repeater') ): the_row(); 

                            // vars
                            $price_doc_serv = get_sub_field('price_doc_serv');

                            ?>


                                <li class="accordeon_item">
                                    <a class="accordeon_trigger" href="#"><?php echo $price_doc_serv; ?></a>
                                    <ul class="accordeon_inner_list">

                                    <?php if( have_rows('add_prise_repeater_serv') ): ?>
                                        <?php while( have_rows('add_prise_repeater_serv') ): the_row(); 

                                        // vars
                                        $price_serv_name = get_sub_field('price_serv_name');
                                        $price_serv = get_sub_field('price_serv');

                                        ?>
                                            <li class="accordeon_inner_item">
                                                <div class="price_list_line clear_fix">
                                                    <div class="serv_name"><?php echo $price_serv_name; ?></div>
                                                    <div class="serv_price"><?php echo $price_serv; ?></div>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                    </ul>
                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                        <!-- Accordeon list End -->
                    </div>
                    <!-- Accordeon End -->
                </div>
                <!-- Columns End -->
            </div>
            <!-- Row end -->
        </section>
        <!-- Price list End -->
        
    </div>
    <!-- Content End -->

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>     
<?php get_footer(); ?>
		