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

<section id="breadcrumbs" class="usa-grid usa-section usa-section--smallVerticalSpacing">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
        }
    ?>
</section>
<section id="primary" class="usa-grid usa-section usa-section--withBreadcrumb">
    <div class="main-content <?php echo esc_attr($main_width); ?>">
        <header class="entry-header">
            <h1><?php the_title(); ?></h1>
            <div class="entry-updated">Published on <?php the_date() ?></div>
        </header>
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/singles/content');

        endwhile; // End of the loop.
        ?>
    </div>
</section>

<?php
endif;

get_footer();
