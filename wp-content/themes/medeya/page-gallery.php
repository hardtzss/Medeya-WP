<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

		<!-- Title Line -->
        <section class="title_line_box">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <h2 class="title_line"><?php the_field('gallery_main_title'); ?></h2>
                </div>
            </div>
        </section>
        <!-- Title Line End -->

        <!-- Gallery -->
        <section class="gallery">
            <div class="row">
                <div class="columns small-12 medium-12 large-12">
                    <ul class="gallery_nav_list">
                        <li class="gallery_nav_item">
                            <a class="gallery_item_link active" data-filter="all" href="#">Все</a>
                        </li>
                        <li class="gallery_nav_item">
                            <a class="gallery_item_link" data-filter=".photos_gallery" href="#">Фото</a>
                        </li>
                        <li class="gallery_nav_item">
                            <a class="gallery_item_link" data-filter=".videos_gallery " href="#">Видео</a>
                        </li>
                    </ul>
                </div>

                <div class="columns small-12 medium-12 large-12">
                    <div class="gallery_wrap">
                        <div class="row">

                            <?php if( have_rows('add_gall_photo_rep') ): ?>
                                <?php while( have_rows('add_gall_photo_rep') ): the_row(); 

                                // vars
                                $gall_img = get_sub_field('gall_img');
                                ?>

                                    <a data-fancybox="images" href="<?php echo $gall_img; ?>" class="mix photos_gallery columns small-12 medium-6 large-3">
                                        <div style="background-image: url('<?php echo $gall_img; ?>')" class="cover gallery_item" alt="1">
                                            <div class="box_hover trans">
                                                <div class="icon_hover_wrap">
                                                    <i class="icon ion-ios-eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                <?php endwhile; ?>
                            <?php endif; ?>



                            <?php if( have_rows('add_gall_video_rep') ): ?>
                                <?php while( have_rows('add_gall_video_rep') ): the_row(); 

                                // vars
                                $gall_video_bg = get_sub_field('gall_video_bg');
                                $gall_video_link = get_sub_field('gall_video_link');
                                ?>
                            
                                    <a data-fancybox="videos"
                                       class="mix videos_gallery columns small-12 medium-6 large-3"
                                       href="<?php echo $gall_video_link; ?>">
                                        <div style="background-image: url('<?php echo $gall_video_bg; ?>')" class="cover gallery_item">
                                            <div class="box_hover trans">
                                                <div class="icon_hover_wrap">
                                                    <i class="icon ion-play"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                            
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery End -->

        
    </div>
    <!-- Content End -->

<script type="text/javascript">
    // Gallery
    var galleryBox = $('.gallery_wrap');
    if(galleryBox) {
        var mixer = mixitup(galleryBox, {
            selectors: {
                target: '.mix'
            },
            animation: {
                duration: 500
            }
        });
    }
</script>

<?php endwhile; ?>
<!-- END of Post -->
<?php endif; ?>     
<?php get_footer(); ?>
		