<?php
/*
Template Name: Sidenav Page

This template is used to display a sidenav for l o n g content

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
<section id="breadcrumbs" class="usa-grid usa-section usa-section--smallVerticalSpacing">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
        }
    ?>
</section>
<section id="primary" class="usa-grid usa-section usa-section--withBreadcrumb">
    <?php
    if($sidebar_position == 'left'):
        benjamin_sticky_sidenav($post->ID);
    endif;
    ?>
    <div class="main-content usa-width-two-thirds">
    	<?php
    	while ( have_posts() ) : the_post();

    		get_template_part( 'template-parts/singles/content', 'page' );

    	endwhile; // End of the loop.
    	?>
    </div>
    <?php
    if($sidebar_position == 'right'):
        benjamin_sticky_sidenav($post->ID);
    endif;
    ?>

</section>

<?php
endif;
get_footer();
