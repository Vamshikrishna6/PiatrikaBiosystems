<?php
/**
 * StartNext footer
 */
    global $startnext_opt;

    if( isset($startnext_opt['enable_back_to_top']) ):
        $enable_back_to_top     = $startnext_opt['enable_back_to_top'];
        $main_logo              = $startnext_opt['main_logo']['url'];
        $mobile_logo            = $startnext_opt['mobile_logo']['url'];
        $footer_shape_images    = $startnext_opt['enable_footer_shape_images'];
    else:
        $enable_back_to_top     = true;
        $main_logo              =  '';
        $mobile_logo            =  '';
        $footer_shape_images    =  true;
    endif;
?>
        </div><!-- #content -->

            <footer class="footer-area bg-f7fafd"> <!-- Start Footer Area -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>" class="navbar-brand">
                                        <?php
                                        // Site Logo
                                        if (!$main_logo == ''){ ?>
                                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="<?php bloginfo('name'); ?>">
                                        <?php } else { bloginfo('name'); } ?>
                                    </a>
                                </div>
                                <?php 
                                    if ( is_active_sidebar( 'footer-one' ) ) { 
                                        dynamic_sidebar('footer-one'); 
                                    } 
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <?php 
                                if ( is_active_sidebar( 'footer-two' ) ) { 
                                    dynamic_sidebar('footer-two'); 
                                } 
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <?php 
                                if ( is_active_sidebar( 'footer-three' ) ) { 
                                    dynamic_sidebar('footer-three'); 
                                } 
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <?php 
                                if ( is_active_sidebar( 'footer-four' ) ) { 
                                    dynamic_sidebar('footer-four'); 
                                } 
                                ?>

                                <?php get_template_part('inc/social-link', 'social-link'); ?>
                            </div>
                        </div>

                        <?php if(isset($startnext_opt['copyright_text'])): ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="copyright-area">
                                    <p><?php echo esc_html($startnext_opt['copyright_text']);?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php if( $footer_shape_images == true ): ?>
                    <div class="shape1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png');?>" alt="<?php echo esc_attr__('shape', 'startnext') ?>"></div>
                    <div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg');?>" alt="<?php echo esc_attr__('shape2', 'startnext') ?>"></div>
                <?php endif; ?>
            </footer><!-- End Footer Area -->
            
            <?php if ( $enable_back_to_top == true ): ?>
                <div class="go-top"><i data-feather="arrow-up"></i></div>
            <?php endif; ?>

            <?php wp_footer(); ?>
        </div>
    </body>
</html>