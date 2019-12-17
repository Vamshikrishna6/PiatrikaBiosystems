<?php
/**
 * The template for displaying all pages
*/
get_header();

$vc_enabled = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);

if( function_exists('acf_add_options_page') ) {
	$hide_banner = get_field('page_banner_hide');
}else {
	$hide_banner = false;
}

?>
    <?php if( $hide_banner == false ): ?>
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
	<?php endif; ?>

	<?php if ($vc_enabled !== 'true' && !startnext_is_elementor() ) {  ?>
	<div class="main-content">
	<?php } ?>

		<?php if( !startnext_is_elementor()): ?>
			<div id="primary" class="container">
		<?php endif; ?>
			<?php
			while ( have_posts() ) :
				the_post();
                $thecontent = get_the_content();
                if (class_exists( 'WooCommerce' ) && is_shop()) {
                    get_template_part( 'template-parts/content', 'page' );
                }else {
                    if(empty($thecontent)){  ?><div class="single-blank-page"> </div><?php }

                    get_template_part( 'template-parts/content', 'page' );
                }
				
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; 
			?>
		<?php if( !startnext_is_elementor()): ?>
			</div>
		<?php endif; ?>
	<?php 
	if ($vc_enabled !== 'true' && !startnext_is_elementor() ) {  ?>
	</div>
	<?php } ?>
<?php
get_footer();
