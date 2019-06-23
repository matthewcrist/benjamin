<?php
/*
Template Name: Template Page 3

This is a copy of the standard "page" template, but exists to allow some
deviations to standard pages

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
<section id="breadcrumbs" class="grid-container usa-section--smallVerticalSpacing">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
        }
    ?>
</section>
<section id="primary" class="grid-container usa-section--withBreadcrumb">
    <?php
    if($sidebar_position == 'left'):
        benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
    endif;
    ?>
    <div class="usa-prose <?php echo esc_attr($main_width); ?>">
    	<?php
    	while ( have_posts() ) : the_post();

            get_template_part('template-parts/singles/content', 'page');

    	endwhile; // End of the loop.
    	?>
    </div>
    <?php
    if($sidebar_position == 'right'):
        benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
    endif;
    ?>

</section>

<?php
endif;


get_footer();
