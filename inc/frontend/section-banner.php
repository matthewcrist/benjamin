<?php

$sidebars = wp_get_sidebars_widgets();

?>
<!-- Gov banner BEGIN -->
<header class="usa-light-background padding-y-2">
    <div class="grid-container text-white">
        <?php echo stripslashes(get_theme_mod('banner_text_setting', null));  //WPCS: xss ok. ?>
    </div>
</header>  <!-- end accordion header -->

<!-- Gov banner END -->
