<!-- Page Footer -->
        <footer class="page_footer">
            <div class="footer_first_part">
                <div class="row">
                    <div class="columns small-12 medium-4 large-4">
                        <p class="footer_col_title"><?php the_field('footer_col_title_1', 'option'); ?></p>
                        <ul class="footer_contacts_list">
                            <li class="footer_contact footer_addres">
                                <i class="fa fa-map-marker footer_icon" aria-hidden="true"></i>
                                <span><?php the_field('footer_addres', 'option'); ?></span>
                            </li>
                            <li class="footer_contact footer_site_url">
                                <i class="fa fa-globe footer_icon" aria-hidden="true"></i>
                                <span>
                                    <a href="http://medical-clinic.cmsmasters.net"><?php the_field('footer_site_url', 'option'); ?></span>
                            </li>
                            <li class="footer_contact footer_mail">
                                <i class="fa fa-envelope-o footer_icon" aria-hidden="true"></i>
                                <span>
                                    <a href=""><?php the_field('footer_mail', 'option'); ?></a>
                                </span>
                            </li>
                            <li class="footer_contact footer_phone">
                                <i class="fa fa-mobile footer_icon" aria-hidden="true"></i>
                                <span><?php the_field('footer_phone', 'option'); ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="columns small-12 medium-4 large-4">
                        <p class="footer_col_title"><?php the_field('footer_col_title_2', 'option'); ?></p>

                        <?php if( have_rows('footer_link_repeater', 'option') ): ?>
                            <ul class="footer_doctor_list">
                                <?php while( have_rows('footer_link_repeater', 'option') ): the_row();
                                // vars
                                $footer_link_text = get_sub_field('footer_link_text', 'option');
                                $footer_link = get_sub_field('footer_link', 'option');

                                ?>
                                    <li class="footer_doc">

                                        <?php if( $footer_link ): ?>
                                            <a class="footer_doc_link" href="<?php echo $footer_link; ?>">
                                        <?php endif; ?>

                                            <?php echo $footer_link_text; ?>

                                        <?php if( $footer_link ): ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="columns small-12 medium-4 large-4">
                        <p class="footer_col_title"><?php the_field('footer_col_title_3', 'option'); ?></p>

                        <?php if( have_rows('footer_link_repeater_2', 'option') ): ?>
                            <ul class="footer_services_list">
                                <?php while( have_rows('footer_link_repeater_2', 'option') ): the_row();
                                    // vars
                                    $footer_link_text_2 = get_sub_field('footer_link_text_2', 'option');
                                    $footer_link_2 = get_sub_field('footer_link_2', 'option');

                                ?>
                                    <li class="footer_service">

                                        <?php if( $footer_link_2 ): ?>
                                            <a class="footer_service_link" href="<?php echo $footer_link_2; ?>">
                                        <?php endif; ?>

                                            <?php echo $footer_link_text_2; ?>

                                        <?php if( $footer_link_2 ): ?>
                                        </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <div class="footer_last_part">
                <div class="row">
                    <div class="columns small-12 medium-12 large-12">
                        <p><?php the_field('footer_rights', 'option'); ?></p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Page Footer End -->

        <div id="button-up" class="button-up">
           <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </div>


    </div>
    <!-- Main Wrap End -->
    <?php wp_footer(); ?>
</body>
</html>
