<?php global $startnext_opt;
/**
 * Social Link
 * @package WordPress
 * @subpackage startnext
*/ 
if( isset( $startnext_opt['startnext_social_target'] ) ) {
    $target = $startnext_opt['startnext_social_target'];
}else {
    $target = '_blank';
}

?>
    <ul class="social-links">
        <?php if (isset($startnext_opt['twitter_url'] ) && $startnext_opt['twitter_url']) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['twitter_url']);?>" class="twitter" > <i class="fab fa-twitter"></i></a>
            </li>
        <?php  } ?>


        <?php if (isset($startnext_opt['facebook_url'] ) && $startnext_opt['facebook_url']) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['facebook_url']); ?>" class="facebook"> <i class="fab fa-facebook-f"></i></a>
            </li>
        <?php  } ?>

        <?php if (isset($startnext_opt['instagram_url'] ) && $startnext_opt['instagram_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['instagram_url']); ?>" class="instagram"> <i class="fab fa-instagram"></i></a>
            </li>
        <?php  } ?>

        <?php 
        if (isset($startnext_opt['linkedin_url'] ) && $startnext_opt['linkedin_url'] ) { ?>
        <li>
            <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['linkedin_url']);?>" > <i class="fab fa-linkedin"></i></a>
        </li>
        <?php  } ?>

        <?php 
        if (isset($startnext_opt['pinterest_url'] ) && $startnext_opt['pinterest_url'] ) { ?>
        <li>
            <a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($startnext_opt['pinterest_url']);?>" > <i class="fab fa-pinterest"></i></a>
        </li>
        <?php  } ?>

        <?php if (isset($startnext_opt['dribbble_url'] ) && $startnext_opt['dribbble_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($startnext_opt['dribbble_url']);?>" > <i class="fab fa-dribbble"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($startnext_opt['tumblr_url'] ) && $startnext_opt['tumblr_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['tumblr_url']);?>" > <i class="fab fa-tumblr"></i></a>
            </li>
        <?php } ?>

        <?php 
        if (isset($startnext_opt['youtube_url'] ) && $startnext_opt['youtube_url'] ) { ?>
        <li>
            <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['youtube_url']);?>" > <i class="fab fa-youtube"></i></a>
        </li>
        <?php  } ?>

        <?php if (isset($startnext_opt['flickr_url'] ) && $startnext_opt['flickr_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['flickr_url']);?>" > <i class="fab fa-flickr"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($startnext_opt['behance_url'] ) && $startnext_opt['behance_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['behance_url']);?>" > <i class="fab fa-behance"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($startnext_opt['github_url'] ) &&  $startnext_opt['github_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['github_url']);?>" > <i class="fab fa-github"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($startnext_opt['skype_url'] ) && $startnext_opt['skype_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['skype_url']);?>" > <i class="fab fa-skype"></i></a>
            </li>
        <?php } ?>

        <?php if (isset($startnext_opt['rss_url'] ) && $startnext_opt['rss_url'] ) { ?>
            <li>
                <a target="<?php echo esc_attr($target); ?>" href="<?php  echo esc_url($startnext_opt['rss_url']);?>" > <i class="fas fa-rss"></i></a>
            </li>
        <?php } ?>
    </ul>
<?php
 ?>
