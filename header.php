<!doctype html><?php global $startnext_opt; ?>
<?php
// Option Data
if( isset( $startnext_opt['header_script'] ) ):
    $main_logo              = $startnext_opt['main_logo']['url'];
    $mobile_logo            = $startnext_opt['mobile_logo']['url'];
    $header_script          = $startnext_opt['header_script'];
    $header_button          = $startnext_opt['header_button'];
    $header_button_link     = $startnext_opt['header_button_link'];
    $enable_cart            = $startnext_opt['enable_cart'];
    $enable_preloader       = $startnext_opt['enable_preloader'];
    $enable_box_layout      = $startnext_opt['enable_box_layout'];
    $enable_rtl             = $startnext_opt['enable_rtl'];
else:
    $main_logo              = '';
    $mobile_logo            = '';
    $header_script          = '';
    $header_button          = '';
    $header_button_link     = '';
    $enable_cart            = false;
    $enable_preloader       = false;
    $enable_box_layout      = false;
    $enable_rtl             = false;
endif;

if ( $enable_rtl == true ): ?>
    <html dir="rtl" <?php language_attributes(); ?>><?php        
else: ?>
    <html <?php language_attributes(); ?>><?php
endif; ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php 
    wp_head();

    // Google Analytic Code ?>
    <script><?php echo $header_script; ?></script>

</head>

<body <?php body_class(); ?>>
    <?php

        // Nav background color white. 
       if( function_exists('acf_add_options_page') ) {
            $hide_banner = get_field('nav_background_color_white');
            if(  $hide_banner == true ):
                $nav_bg_class = 'p-relative';
            else:
                $nav_bg_class = '';
            endif;
        }else {
            $nav_bg_class = '';
        }
       
        // Box layout
        if ( $enable_box_layout == true ):
            $boxed_layout = 'boxed-layout';
        else:
            $boxed_layout = '';
        endif;
    ?>
    <div class="default-layout <?php echo esc_attr( $boxed_layout ); ?>">
        
        <?php if( $enable_preloader == true ): ?><!-- Start Preloader Area -->
            <div class="preloader">
                <div class="spinner"></div>
            </div>
        <?php endif; ?><!-- End Preloader Area -->
       
        <header id="header"> <!-- Start Navbar Area -->
            <div class="startp-mobile-nav float-menu-d-none">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                        <?php
                        if (!$mobile_logo == ''){ ?>
                            <img src="<?php echo esc_url( $mobile_logo, 'startnext' ); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php }elseif(!$main_logo =='') { ?>
                            <img src="<?php echo esc_url( $main_logo, 'startnext' ); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php } else {
                            bloginfo('name');
                        } ?>
                    </a>
                </div>

                <div class="float-burger-menu" data-toggle="modal" data-target="#FloatMenu"><!-- Float burger menu -->
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
                
				<?php if ( class_exists( 'WooCommerce' ) ):  ?><!-- Cart link for mobile device -->
                    <?php if( $enable_cart == true ): ?>
                        <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-link">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="mini-cart-count"></span>
                        </a>
                    <?php endif; ?>
				<?php endif; ?>
            </div>

            <div id="FloatMenu" class="modal fade modal-right float-menu-modal" tabindex="-1" role="dialog"><!-- Float Menu Modal -->
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body p-0">
                            <div class="startp-mobile-nav startp-float-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="startp-nav <?php if ( is_user_logged_in() ) {echo esc_attr('hide-adminbar', 'startnext');}?> <?php echo esc_attr($nav_bg_class, 'startnext')?>">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                            <?php
                                if (!$main_logo == ''){ ?>
                                    <img src="<?php echo esc_url( $main_logo ); ?>" alt="<?php bloginfo('name'); ?>">
                                <?php } else { 
                                    bloginfo('name'); 
                                } 
                            ?>
                        </a>
                        <?php
                        if(has_nav_menu('main-menu')){
                            wp_nav_menu( array(
                                'theme_location'  => 'main-menu',
                                'depth'	          => 5, 
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse mean-menu',
                                'container_id'    => 'navbarSupportedContent',
                                'menu_class'      => 'navbar-nav nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new Bootstrap_Navwalker(),
                            ) );
                        }
                        ?>
                        <?php if ( class_exists( 'WooCommerce' ) ): ?>
                            <?php if( $enable_cart == true ): ?>
                                <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-link">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="mini-cart-count"></span>
                                </a> 
                            <?php endif; ?>
                        <?php endif; ?>
                        

                        <?php if ( !$header_button == '' ): ?>
                            <div class="others-option">
                                <a href="<?php echo esc_url($header_button_link); ?>" class="btn btn-primary">
                                    <?php echo esc_html($header_button); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </nav>
                </div> 
            </div>
        </header><!-- End Navbar Area -->
        

        <div id="content" class="site-content">