<?php
/**
 * Single Project Page
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
        <div class="shape2 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape3"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape3.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape4"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape5"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape5.png'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape6 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape7"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg'); ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
    </div>

    <section class="project-details-area ptb-80"><!-- Start Project Details Area -->
        <div class="container">
            <div class="row">
                <?php 
                while ( have_posts() ) :
                    the_post();
                    $images = get_field('project_gallery_images');
                    if ($images) {
                        foreach ($images as $image ) { ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="project-details-image">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                                <a href="<?php echo esc_url($image['url']); ?>" class="popup-btn"><i data-feather="plus"></i></a>
                            </div>
                        </div>
                        <?php }
                    } ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="project-details-desc">
                            <?php the_content() ?>
                            <div class="project-details-information">
                                
                                <?php
                                $name_label                 =   get_field('client_name_label');
                                $client_name                =   get_field('client_name');
                                $category_label             =   get_field('category_label');
                                $project_date_label         =   get_field('project_date_label');
                                $project_completed_date     =   get_field('project_completed_date');
                                $location_label             =   get_field('location_label');
                                $location                   =   get_field('location');
                                $live_preview_button_text   =   get_field('live_preview_button_text');
                                $live_preview_link          =   get_field('live_preview_link');

                                if( $name_label || $client_name ): ?>
                                    <div class="single-info-box">
                                        <h4><?php echo esc_html( $name_label ); ?></h4>
                                        <p><?php echo esc_html( $client_name ); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $terms = wp_get_post_terms($post->ID, 'project_cat'); 
                                if ($terms) { ?>
                                    <div class="single-info-box">
                                        <h4><?php echo esc_html( $category_label ); ?></h4>
                                        <p><?php $output = array(); foreach ($terms as $term) { $output[] = $term->name; } echo join( ', ', $output );?></p>
                                    </div>
                                    <?php
                                } ?>
                                
                                <?php if( $project_date_label || $project_completed_date  ): ?>
                                    <div class="single-info-box">
                                        <h4><?php echo esc_html( $project_date_label ); ?></h4>
                                        <p><?php echo esc_html( $project_completed_date ); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if( $location_label || $location ): ?>
                                    <div class="single-info-box">
                                        <h4><?php echo esc_html( $location_label ); ?></h4>
                                        <p><?php echo esc_html( $location ); ?></p>
                                    </div>
                                <?php endif; ?>

                                <?php if( $live_preview_button_text || $live_preview_link ): ?>
                                    <div class="single-info-box">
                                        <a href="<?php echo esc_url( $live_preview_link ); ?>" class="btn btn-primary"><?php echo esc_html( $live_preview_button_text ); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile; 
                ?>
            </div>
        </div>
    </section><!-- End Project Details Area -->

<?php
get_footer();
