<?php
/*
 * Template Name: Country
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

    <div class="bottom" id="gridCountries">

        <?php if( have_rows('icon_item') ): ?>
            <?php while( have_rows('icon_item') ): the_row(); 
                $image = get_sub_field('background_image');
                $link = get_sub_field('link');
                ?>
                <a href="<?php echo esc_url( $link ); ?>"><div id="iconItem" style="background-image: url(<?php the_sub_field('background_image'); ?>);"></div></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
 </section>