<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Benjamin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
    <div class="entry-header">
        <h1><?php the_title() ?></h1>
        <div class="entry-updated">Last updated <?php the_modified_date('F j, Y'); ?></div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Name of current post */
                    esc_html__('Edit %s', 'benjamin'),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article>
