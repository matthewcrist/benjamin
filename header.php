<?php benjamin_template_settings(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<button onclick="topFunction()"  aria-hidden="true" id="backtotop" title="Go to top">Top</button>

<body <?php body_class(); ?>>

<a class="usa-skipnav" href="primary"><?php esc_html_e('Skip to main content', 'benjamin'); ?></a>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("backtotop").style.display = "block";
  } else {
    document.getElementById("backtotop").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<?php
    benjamin_the_header();
?>


<div class="usa-overlay"></div>

<main id="usa-prose" role="main">