<?php

$sidebars = wp_get_sidebars_widgets();

?>
<!-- Gov banner BEGIN -->
<div class="usa-banner">

    <div class="usa-accordion">
        <header class="usa-banner-header">
            <div class="usa-grid usa-banner-inner">
                <p><?php echo stripslashes(get_theme_mod('banner_text_setting', null));  //WPCS: xss ok. ?></p>
            </div>
        </header>  <!-- end accordion header -->
    </div> <!-- end accordion -->
</div>

<!-- Gov banner END -->
