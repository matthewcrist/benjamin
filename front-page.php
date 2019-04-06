<?php
/**
 * The front page template file
 *
 * It is used to display the front page of the website.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Benjamin
 */


get_header();

/**
 * get all the settings needed for the the template layout
 *
 * returns:
 * $template
 * $main_width
 * $hide_content
 * $sidebar_position
 *
 */
extract( benjamin_template_settings() );

if( !$hide_content ):
?>


<section id="primary" class="usa-grid usa-section">
    <div class="main-content usa-width-two-thirds">
        <?php if ( is_active_sidebar( 'home_main' ) ) : ?>
            <?php dynamic_sidebar( 'home_main' ); ?>
        <?php endif; ?>
    </div>
    <div class="sidebar usa-width-one-third always-visible">
        <?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'home_sidebar' ); ?>
        <?php endif; ?>
    </div>
</section>

<?php
endif;

get_footer();
