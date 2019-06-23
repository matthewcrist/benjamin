<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Benjamin
 */

get_header();

/**
 * Get all the settings needed for the the template layout
 *
 * Returns:
 * $template
 * $main_width
 * $hide_content
 * $sidebar_position
 */

extract(benjamin_template_settings());


if (! $hide_content) :
?>
<section id="breadcrumbs" class="grid-container usa-section--smallVerticalSpacing">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
        }
    ?>
</section>
<section id="primary" class="grid-container usa-section--withBreadcrumb">
    <?php
    if ($sidebar_position == 'left') :
        benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
    endif;
    ?>
    <div class="usa-prose <?php echo esc_attr($main_width); ?>">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/singles/content');

        endwhile; // End of the loop.
        ?>
    </div>
    <?php
    if ($sidebar_position === 'right') :
        benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
    endif;
    ?>

</section>

<?php
endif;

get_footer();
