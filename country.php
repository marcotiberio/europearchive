<?php
/*
 * Template Name: Country
 */
  
 get_header();  ?>


 <section class="index-countries">
    <div class="bottom" id="gridCountries">

        <?php if( have_rows('icon_item') ): ?>
            <?php while( have_rows('icon_item') ): the_row(); 
                $image = get_sub_field('background_image');
                ?>
                <div id="iconItem" style="background-image: 'url(<?php the_field($image, 'full'); ?>)';" onclick="window.open('https://europearchive.eu/portfolio-of-a-teacher-with-student-letters/', '_blank');"></div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
 </section>