<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
extract(benjamin_template_settings());
$template = 'news-sidebar';

$terms = get_terms('news-category');

if (!$hide_content) :
?>

<section id="primary">
    <div class="grid-container margin-top-4">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
            }
        ?>
    </div>
    <div class="grid-container margin-top-4">
        <div class="grid-row grid-gap">
            <?php
            if($sidebar_position == 'left'):
                benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
            endif;
            ?>
            <div class="<?php echo esc_attr($main_width); ?>">
                <h1 class="text-violet-70v font-sans-xl text-normal margin-top-0">News &amp; Updates</h1>
                <div class="usa-prose">
                    <?php
                        
                        if (have_posts()) :
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                                get_template_part('template-parts/feed/news', get_post_format());
                            endwhile;

                        else :
                            get_template_part('template-parts/feed/news', 'none');
                        endif;
                    ?>
                    <div class="grid-row">
                        <div class="flex-fill">
                            <?php next_posts_link( 'View More' ); ?>
                        </div>
                        <div class="flex-fill text-right">
                            <?php previous_posts_link( 'View Newer' ); ?>
                        </div>
                    </div>
                </div>
                <h1 class="text-violet-70v font-sans-xl text-normal margin-top-10">Sign Up for News &amp; Updates</h1>
                <div class="font-sans-md text-normal line-height-sans-4 margin-top-0 margin-bottom-5">Want to receive email updates from OEC? Choose the topics you're interested in and we'll send you updates.</div>
                <form>
                    <?php 
                        $count = 0;
                        foreach($terms as $term) 
                    { ?>
                        <div class="grid-row padding-bottom-3 <?php if ($count != count($terms) - 1) { ?> margin-bottom-3 border-bottom border-base-lighter<?php } ?>">
                            <div class="flex-auto margin-right-2">
                                <div class="usa-checkbox">
                                    <input class="usa-checkbox__input" id="option-<?php echo $term->term_id ?>" type="checkbox" name="option-<?php echo $term->term_id ?>" checked>
                                    <div class="usa-checkbox__label"></div>
                                </div>
                            </div>
                            <label for="option-<?php echo $term->term_id ?>" class="flex-fill">
                                <div class="font-sans-md text-bold"><?php echo $term->name; ?></div>
                                <?php
                                    $term_children = get_term_children($term->term_id, 'news-category');
                                    foreach($term_children as $child) {
                                        $children[] = get_term_by('id', $child, 'news-category')->name;
                                    }
                                ?>
                                <?php if ($children) { ?>
                                    <div>
                                        <strong>Includes information on:</strong> 
                                        <?php echo implode(', ', $children); ?>
                                    </div>
                                <?php } ?>
                            </label>
                        </div>
                        <?php $count++; ?>
                    <?php } ?>
                    <div class="grid-row flex-align-end margin-bottom-6">
                        <div class="flex-1 margin-right-1">
                            <label class="usa-label" for="email">Email Address</label>
                            <input class="usa-input" id="email" name="email" type="email" />
                        </div>
                        <div class="flex-1">
                            <button class="usa-button ">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if($sidebar_position == 'right'):
                benjamin_get_sidebar($template, $sidebar_position, $sidebar_size);
            endif;
            ?>
        </div>
    </div>
</section>

<?php
endif;
get_footer();
