<?php
/**
 * Single Feature Page
 *
 */
get_header();

?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        
        <div class="shape1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape2 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape3"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape3.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape4"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape5"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape5.png'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape6 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape7"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
    </div>

        <!-- Start features Details Area -->
        <section class="features-details-area ptb-80">
            <div class="container">
                <?php 
                while ( have_posts() ) :
                    the_post(); 

                    $feature_faq_content    =   get_field('feature_faq_content');
                    $feature_faq_image      =   get_field('feature_faq_image');
                    $faq_items              =   get_field('faq_items');
                    ?>
                    <div class="row align-items-center">
                        <div class="features-details">
                            <div class="features-details-desc">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>

                    <div class="separate"></div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 features-details">
                            <div class="features-details-desc">
                                <p><?php echo esc_html( $feature_faq_content ); ?></p>
                                <?php

                                if( $faq_items ){ ?>
                                    <div class="features-details-accordion">
                                        <ul class="accordion">
                                        <?php 
                                        $i = 0;
                                        foreach ( $faq_items as $item ) {
                                            if($i == 0){ ?>
                                            <li class="accordion-item">
                                                <a class="accordion-title active" href="javascript:void(0)">
                                                    <i class="fas fa-plus"></i>
                                                    <?php echo esc_html( $item['faq_title'] ); ?>
                                                </a>

                                                <p class="accordion-content show"><?php echo esc_html( $item['faq_description'] ); ?></p>
                                            </li>
                                            <?php }else{ ?>
                                                <li class="accordion-item">
                                                    <a class="accordion-title" href="javascript:void(0)">
                                                        <i class="fas fa-plus"></i>
                                                        <?php echo esc_html( $item['faq_title'] ); ?>
                                                    </a>

                                                    <p class="accordion-content"><?php echo esc_html( $item['faq_description'] ); ?></p>
                                                </li>
                                        <?php } $i++; } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 features-details-image">
                            <img src="<?php echo esc_url( $feature_faq_image['url']  ); ?>" class="wow fadeInUp" alt="<?php echo esc_attr( $feature_faq_image['alt'] ); ?>">
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <!-- End features Details Area -->

<?php
get_footer();
