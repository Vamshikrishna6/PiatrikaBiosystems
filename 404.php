<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package StartNext
 */

get_header();

global $startnext_opt;

if ( isset( $startnext_opt['title_not_found'] ) ):
	$title      = $startnext_opt['title_not_found'];
	$page_desc  = $startnext_opt['404_page_desc'];
	$content    = $startnext_opt['content_not_found'];
	$button     = $startnext_opt['search_button_text'];
    $image      = $startnext_opt['not_found_image']['url'];
    $p_text     = $startnext_opt['search_placeholder'];
else:
	$title      = '404';
	$content    = 'It looks like nothing was found at this location. Maybe try one of the links below or a search?';
	$button     = 'Search';
	$image      = '';
    $page_desc  = 'We are sorry but it looks like that page does not exist anymore.';
    $p_text     = 'Search ...';
endif;
?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2><?php echo esc_html( $title ); ?></h2>
                    <p><?php echo esc_html( $page_desc ); ?></p>
                </div>
            </div>
        </div>
        
        <div class="shape1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape2 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape3"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape3.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape4"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape5"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape5.png') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape6 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
        <div class="shape7"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
        <div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext'); ?>"></div>
    </div>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="page-content">

                    <?php if( !$image == '' ): ?>
                        <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/404.png'); ?>" alt="<?php echo esc_attr( $title ); ?>">
                    <?php endif; ?>
                    
                    <p><?php echo esc_html( $content ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</main>
	</div>
<?php
get_footer();
