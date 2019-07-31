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
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<a href="#primary" class="usa-button usa-button--secondary tablet:display-flex tablet:flex-row flex-align-center width-9 tablet:width-auto" id="scrolltotop" title="Scroll to top" hidden>
  <div class="margin-bottom-05 tablet:margin-right-1 tablet:margin-bottom-0">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 496 496"><path fill="#FFF" fill-rule="nonzero" d="M248 496c137 0 248-111 248-248S385 0 248 0 0 111 0 248s111 248 248 248zm0-448c110.5 0 200 89.5 200 200s-89.5 200-200 200S48 358.5 48 248 137.5 48 248 48zm20 328h-40c-6.6 0-12-5.4-12-12V248h-67c-10.7 0-16-12.9-8.5-20.5l99-99c4.7-4.7 12.3-4.7 17 0l99 99c7.6 7.6 2.2 20.5-8.5 20.5h-67v116c0 6.6-5.4 12-12 12z"/></svg>
  </div>
  <span class="display-none tablet:display-block">Scroll&nbsp;to&nbsp;</span>
  <span class="text-uppercase tablet:text-no-uppercase">top</span>
</a>
</body>
</html>
