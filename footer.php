<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Benjamin
*/

?>

</main><!-- #usa-prose -->
<footer class="usa-footer usa-footer--medium" role="contentinfo">
  <?php
    // inc/frontend/footer.php
    benjamin_the_footer();
  ?>
  <div class="usa-footer__secondary-section">
    <div class="grid-container">
      <div class="usa-footer__logo grid-row grid-gap-2">
        <div class="grid-col-auto">
          <div class="usa-footer__logo-heading"><?php bloginfo( 'name' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<a href="#primary" class="usa-button usa-button--secondary position-fixed z-100 text-uppercase right-2 bottom-3" id="backtotop" title="Go to top" hidden>Top</a>
</body>
</html>
