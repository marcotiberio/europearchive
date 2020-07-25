<?php 
	/* Template Name: Home */
?>

<?php get_header(); ?>

<section class="container">
    <img id="logoHome" src="http://europearchive.eu/wp-content/uploads/2020/07/europearchive-logo-home.png" alt="">
    <!-- <h1 onclick="window.location.href='http://europearchive.eu/german-shepard-bottle/'">Europe<br>Archive</h1>
    <h2>Erik Kessels / Thomas Mailaender</h2> -->
</section>
<div class="box-bottom" id="boxBottom">
    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'europe-archive' ); ?></button>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            )
        );
        ?>
    </nav><!-- #site-navigation -->
</div>


<?php
get_footer();