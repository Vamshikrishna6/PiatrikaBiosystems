<?php
/**
 * Register custom style.
 */

if ( ! function_exists( 'startnext_custom_css' ) ) {
    function startnext_custom_css(){
        global $startnext_opt; 

        if( isset( $startnext_opt['header_script'] ) ):
            $enable_sticky_header   = $startnext_opt['enable_sticky_header'];
            $enable_box_layout      = $startnext_opt['enable_box_layout'];
            $primary_color          = $startnext_opt['primary_color'];
            $secondary_color        = $startnext_opt['secondary_color'];
            $theme_hosting_color    = $startnext_opt['hosting_bg_color'];
            $theme_gray_color       = $startnext_opt['theme_gray_color'];
            $theme_gradient_color   = $startnext_opt['theme_gradient_color'];
            $paragraph_color        = $startnext_opt['paragraph_color'];
            $nav_bg_color           = $startnext_opt['nav_bg_color'];
            $sticky_bg              = $startnext_opt['sticky_bg'];
            $nav_item_color         = $startnext_opt['nav_item_color'];
            $footer_bg              = $startnext_opt['footer_bg'];
        else:
            $enable_sticky_header   = false;
            $enable_box_layout      = false;
            $primary_color          = '#44ce6f';
            $secondary_color        = '#c679e3';
            $theme_hosting_color    = '#032b8d';
            $theme_gray_color       = '#f7fafd';
            $theme_gradient_color   = '#43e794';
            $paragraph_color        = '#666666';
            $nav_bg_color           = '#f8f8f8';
            $sticky_bg              = '#ffffff';
            $nav_item_color         = '#4a6f8a';
            $footer_bg              = '#f7fafd';
        endif;

        $custom_css ='';

        $custom_css .='
        a:hover, a:focus, .startp-mobile-nav.mean-container .mean-nav ul li a.active, .startp-mobile-nav.mean-container .mean-nav ul li .dropdown-menu li.current_page_item a, .startp-nav nav .navbar-nav .nav-item a:hover, .startp-nav nav .navbar-nav .nav-item a:focus, .startp-nav nav .navbar-nav .nav-item a.active, .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item:hover, .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item.active, .startp-nav .navbar-light .navbar-nav .dropdown-menu .dropdown-item:active, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link, .navbar-light .collapse ul li ul .current_page_item.active > .dropdown-item, .navbar-light .collapse ul > li:hover > a, .navbar-light .collapse ul ul > li:hover > a,
        .navbar-default .navbar-nav .show .dropdown-menu > li > a:focus,
        .navbar-default .navbar-nav .show .dropdown-menu > li > a:hover, .navbar-light .collapse ul ul ul > li:hover > a, .navbar-light .collapse ul ul, .navbar-light .collapse ul ul.dropdown-menu, .navbar-light .collapse ul ul ul, .navbar-light .collapse ul ul ul.dropdown-menu, .navbar-light .collapse ul ul ul ul, .navbar-light .collapse ul ul ul ul.dropdown-menu, .navbar-light .collapse ul ul ul ul, .navbar-light .collapse ul ul ul ul.dropdown-menu, .single-box .icon, .single-box:hover .icon, .services-content .box svg, .services-content .box i, .single-services-box .icon, .single-features .icon, .single-team .team-content ul li a:hover, .funfact h3, .pricing-table .price span, .single-blog-post .blog-post-content ul li i, .single-blog-post .blog-post-content ul li a, .single-blog-post .blog-post-content ul li a:hover, .single-blog-post .blog-post-content .read-more-btn:hover, .sticky .blog-post-content h3 a:hover, .sticky .blog-post-content ul li a:hover, .blog-details-area .blog-details .article-content .entry-meta li i, .blog-details-area .blog-details .article-content .entry-meta li a:hover, .blog-details-area .blog-details .article-content ul.category li a, .project-details-image a:hover, .project-details-desc .project-details-information .single-info-box ul li a:hover, .contact-info-box .icon, .contact-info-box p a:hover, .single-footer-widget ul.list li a:hover, .single-footer-widget ul.footer-contact-info li svg, .single-footer-widget ul.footer-contact-info li a:hover, .single-footer-widget ul.social-links li a, .single-why-choose-us .icon, .single-pricing-table .price span, .single-hosting-features .icon, .cta-right-content .buy-btn .btn-primary:hover, .cta-right-content .buy-btn .btn-primary:focus, .products-details .availability span, .products-details .products-share-social ul li a, .cart-table table tbody tr td.product-name a:hover, .user-actions svg, .user-actions span, .user-actions span a:hover, .user-actions span a:focus, .order-details .order-table table tbody tr td.product-name a:hover, .widget-area .widget ul li a:hover, .widget-area .widget_rss ul li .rss-date, .widget-area .calendar_wrap table #prev a, .widget-area .calendar_wrap table #next a, .pagination-area .page-numbers i, .pages-links .post-page-numbers i, .main-content .entry-content a, .main-content code, .main-content kbd, .main-content tt, .main-content var, blockquote::before, table th a, .blog-details .article-content p a, .blog-details .article-content .entry-content a, .blog-details .article-content code, .blog-details .article-content kbd, .blog-details .article-content tt, .blog-details .article-content var, .comments-area .comment-content .entry-content a, .comments-area .comment-content code, .comments-area .comment-content kbd, .comments-area .comment-content tt, .comments-area .comment-content var, #comments .comment-list .comment-body .reply a, #comments .comment-metadata a:hover, .wp-block-file a, .comments-area .comment-list .trackback .comment-body a, .single-footer-widget ul li a:hover, .single-footer-widget .rss-date, .single-footer-widget .calendar_wrap table #prev a, .single-footer-widget .calendar_wrap table #next a, .comment-navigation .nav-links .nav-previous a, .comment-navigation .nav-links .nav-next a, .repair-about-content .sub-title, .repair-about-content ul li span svg, .single-repair-services .icon, .single-repair-services:hover a, .single-repair-services:focus a, .iot-banner-content span, .single-iot-services .icon, .single-iot-services:hover a, .single-iot-services:focus a { color: '. esc_attr($primary_color) .'; }

        .is-style-outline .wp-block-button__link { color: '. esc_attr($primary_color) .' !important; }

        .btn-primary.disabled, .btn-primary:disabled, .pagination-area ul .page-item .page-link:hover, .pagination-area ul .page-item .page-link:focus, .pagination-area ul .page-item.active .page-link, .blog-details-area .blog-details .article-content ul.category li a:hover, .blog-details-area .blog-details .article-content .share-post ul li a:hover, .blog-details-area .blog-details .article-content .share-post ul li a:focus, .domain-search-content form button, .woocommerce .woocommerce-MyAccount-navigation ul li a:hover, .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce .woocommerce-MyAccount-content .button, .single-products .products-image ul li a:hover, .single-products .products-image ul li a:focus, .quick-view-modal .modal-content button.close:hover, .quick-view-modal .modal-content button.close:focus, .cart-table .btn-light, .widget-area .widget_product_search .woocommerce-product-search button, .widget-area .woocommerce-widget-layered-nav .woocommerce-widget-layered-nav-dropdown__submit, .widget-area .widget_price_filter button.button, .widget-area .widget ul li::before, .widget-area .tagcloud a:hover, .pagination-area .page-numbers:hover, .pagination-area .current, .pages-links .post-page-numbers:hover, .pages-links .current, .comment-respond .form-submit input, .wp-block-button .wp-block-button__link, .page-links .post-page-numbers:hover, .page-links .current, .has-cyan-bluish-gray-background-color.has-cyan-bluish-gray-background-color, .single-footer-widget ul li::before, .single-footer-widget .tagcloud a:hover, .comment-navigation .nav-links .nav-previous a:hover, .comment-navigation .nav-links .nav-next a:hover, .single-repair-box:hover a, .single-repair-box:focus a, .single-iot-box:hover a, .single-iot-box:focus a, .cart-link span, .owl-theme .owl-dots .owl-dot:hover span, .owl-theme .owl-dots .owl-dot.active span, .section-title .bar::before, .preloader, .startp-nav nav .others-option .btn.btn-light::after, .startp-nav nav .others-option .btn.btn-light::before, .startp-nav nav .others-option .btn.btn-primary::after, .startp-nav nav .others-option .btn.btn-primary::before, .single-services-box::before, .single-services-box::after, .single-services-box:hover .icon, .single-features:hover .icon, .single-works .icon:hover, .contact-cta-box .btn::before, .contact-cta-box .btn::after, .pricing-table.active-plan .btn-primary::after, .pricing-table.active-plan .btn-primary::before, .ready-to-talk .btn::before, .ready-to-talk .btn::after, .post_type_icon, .post_type, .faq-accordion .accordion .accordion-item .accordion-title:hover, .faq-accordion .accordion .accordion-item .accordion-title.active, .faq-accordion .accordion .accordion-item .accordion-title:focus, .blog-details-area .blog-details .article-img .date, .blog-details-area .post-controls-buttons div a:hover, .blog-details-area .post-controls-buttons div a:focus, .contact-info-box:hover .icon, .single-footer-widget ul.social-links li a:hover, .single-footer-widget ul.social-links li a:hover, .go-top:hover, .search-form .search-submit, .hosting-main-banner .hosting-banner-content ul li::before, .single-pricing-table.active-plan .btn-primary::after, .single-pricing-table.active-plan .btn-primary::before, .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span::before, .testimonials-slides.owl-theme .owl-dots .owl-dot.active span::before, .single-hosting-features::before, .single-hosting-features::after, .single-hosting-features:hover .icon, .features-details-desc ul li::before, .features-details-desc .features-details-accordion .accordion .accordion-title i, .quick-view-modal .modal-content .products-content form button, .products-details form button, .products-details form .buy-btn .btn-primary::after, .products-details form .buy-btn .btn-primary::before, .products-details .products-share-social ul li a:hover, .order-details .payment-method p [type="radio"]:checked + label::after, .order-details .payment-method p [type="radio"]:not(:checked) + label::after, .widget-area .widget_search form .search-submit, .post-password-form input[type="submit"], .single-footer-widget .search-form form .search-submit {background-color: '. esc_attr($primary_color) .';}

        .products-details-tabs .content .products-reviews .form-submit .btn, .woocommerce-form .woocommerce-button, .woocommerce-ResetPassword .woocommerce-Button, .checkout_coupon .button { background-color: '. esc_attr($primary_color) .' !important; }

        .pagination-area .page-numbers:hover, .pagination-area .current, .pages-links .post-page-numbers:hover, .pages-links .current, .is-style-outline .wp-block-button__link, .page-links .post-page-numbers:hover, .page-links .current, .single-repair-box:hover, .single-repair-box:focus, .single-iot-box:hover, .single-iot-box:focus, .form-control:focus, .startp-nav nav .others-option .btn.btn-light:hover, .startp-nav nav .others-option .btn.btn-light:focus, .single-team:hover .team-image img, .client-thumbnails .next-arrow:hover, .client-thumbnails .prev-arrow:hover, .blog-details-area .blog-details .article-content .share-post ul li a:hover, .blog-details-area .blog-details .article-content .share-post ul li a:focus, .blog-details-area .post-controls-buttons div a:hover, .blog-details-area .post-controls-buttons div a:focus, .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span, .testimonials-slides.owl-theme .owl-dots .owl-dot.active span, .pages-links .post-page-numbers:hover, .pages-links .current, .is-style-outline .wp-block-button__link, .page-links .post-page-numbers:hover, .page-links .current, .single-repair-box:hover, .single-repair-box:focus, .single-iot-box:hover, .single-iot-box:focus, .feedback-slides .client-feedback .single-feedback .client-img img, .feedback-slides .client-thumbnails .item .img-fill img, .blog-details-area .blog-details .article-content ul.category li a { border-color: '. esc_attr($primary_color) .'; }
        
        .btn-primary{ background-color: '. esc_attr($primary_color) .'; }

        .woocommerce-pagination .page-numbers li a:hover, .woocommerce-pagination .page-numbers li span.current, .products-details-tabs .content .products-reviews .form-submit .btn {border: 1px solid '. esc_attr($primary_color) .' !important;}

        .btn::after, .btn::before, .startp-nav nav .others-option .btn.btn-primary, .single-services-box:hover .icon.bg-c679e3, .single-features:hover .icon.bg-c679e3, .contact-cta-box .btn-primary, .pricing-table.active-plan .btn-primary, .ready-to-talk .btn-primary, .single-pricing-table.active-plan .btn-primary, .single-hosting-features:hover .icon.bg-c679e3, .cta-right-content .buy-btn .btn-primary, .products-details form .buy-btn .btn-primary { background: '. esc_attr($secondary_color) .'; }

        .go-top, .domain-search-content form button:hover, .domain-search-content form button:focus, .quick-view-modal .modal-content .products-content form button:hover, .quick-view-modal .modal-content .products-content form button:focus, .quick-view-modal .modal-content .products-content form .buy-btn .button, .products-details form button:hover, .products-details form button:focus, .products-details form .add-to-wishlist-btn:hover, .products-details form .add-to-wishlist-btn:focus, .widget-area .widget_shopping_cart .woocommerce-mini-cart__buttons .button.wc-forward { background-color: '.esc_attr($secondary_color) .'; }

        .single-feedback-item .client-info .title span, .single-hosting-features .icon.bg-c679e3, .single-repair-feedback .client-img span, .single-box.bg-c679e3 .icon, .single-box:hover.bg-c679e3 .icon, .single-services-box .icon.bg-c679e3, .single-features { color: '.esc_attr($secondary_color) .'; }

        .single-why-choose-us::before, .single-team .team-info, .cta-area, .repair-about-content ul li span::before, .single-repair-services::after, .repair-why-choose-us, .single-iot-services::after, .iot-why-choose-us, .single-box::before, .services-content .box::before, .single-team .team-info, .single-works::before, .pricing-table .pricing-header::before, .client-thumbnails .next-arrow::before, .client-thumbnails .prev-arrow::before, .ready-to-talk, .single-blog-post .blog-image .date, .single-repair-box .icon::before {background: linear-gradient(135deg, '.esc_attr($primary_color).' 0%, '.esc_attr($theme_gradient_color).' 100%);} 
        
        .single-iot-box .icon::before, .bg-f7fafd, .blog-details-area .blog-details .article-content .blockquote, .contact-info-box .icon, .single-pricing-table .pricing-header i, .bg-f9fafb { background: '.esc_attr($theme_gray_color).'; } 
        
        .hosting-main-banner, .hosting-boxes-area {background-color: '.esc_attr($theme_hosting_color).';} 
        
        p {color: '.esc_attr($paragraph_color).'}

        .startp-nav.p-relative { background: '.esc_attr( $nav_bg_color ).'; }
        .startp-nav.is-sticky { background: '.esc_attr( $sticky_bg ).' !important; }
        .startp-nav nav .navbar-nav .nav-item a { color:'.esc_attr( $nav_item_color ).'; }
        .footer-area { background:'.esc_attr( $footer_bg ).'; }';

        if ( $enable_box_layout == true ) {
            
            $boxed_layout = $startnext_opt['enable_box_layout'];
            $body_bg_color = $startnext_opt['body_bg_color'];
            $body_bg_image = $startnext_opt['body_bg_image']['url'];
                 
            //Boxed Layout
            if ($boxed_layout == true ) {
                wp_register_script( 'startnext-main', get_template_directory_uri() . '/assets/js/startnext-main.js' );

                wp_localize_script( 'startnext-main', 'frontend_ajax_object',
                    array( 
                        'work_slide' => 3,
                        'team_slide' => 3,
                    )
                );
                $custom_css .='
                    .default-layout {
                        background-color: white;
                    }
                    .boxed-layout {
                        max-width: 1140px;
                        margin: auto;
                        overflow: hidden;
                        padding-left: 20px;
                        padding-right: 20px;
                    }
                    .works-slides, .team-area .owl-carousel{
                        max-width: 1140px;
                        margin: auto;
                    }
                '; 
                //Body
                if ($body_bg_image != '') {
                    $custom_css .=' body{ background-image: url('.esc_attr($body_bg_image, 'startnext').'); } ';
                }
                if ($body_bg_color != '') {
                    $custom_css .=' body{ background-color: '.esc_attr($body_bg_color, 'startnext').'!important; }';
                }

            }
        }

        // Sticky Header
        if( $enable_sticky_header != true ) {
            $custom_css .='.startp-nav.is-sticky{ display:none; }';
        }

        // Custom Css
        if( isset($startnext_opt['css_code'] )){
            $custom_css .= $startnext_opt['css_code'];
        }

        wp_add_inline_style('startnext-style-main', $custom_css);

        // Custom Js
        $custom_script ='';
        if( isset($startnext_opt['js_code'] )){
            $custom_script .= $startnext_opt['js_code'];
        }
        wp_add_inline_script( 'startnext-main', $custom_script );

    }
}
add_action( 'wp_enqueue_scripts', 'startnext_custom_css' );



