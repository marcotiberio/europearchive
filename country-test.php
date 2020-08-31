<?php
/*
 * Template Name: Country Test
 */
  
 get_header();  ?>

 <section class="index-countries">

    <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                europe_archive_posted_on();
                europe_archive_posted_by();
                ?>
            </div>
    <?php endif; ?>

    
 </section>