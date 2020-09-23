<?php
/*
 * Template Name: Story
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>


 <section>

    <div class="separator">
    </div>
 
    <div class="left">
        <div class="item-title"><h2>SEARCHING EUROPEAN FLEA MARKETS TO RECREATE A COLLECTIVE MEMORY</h2></div>
        <div class="item-description">
            <?php the_field('item_description_left'); ?>
        </div>
    </div>
    <div class="right">
        <div class="item-description">
            <?php the_field('item_description_right'); ?>
            <hr>
            <img class="logo-project" src="https://europearchive.eu/wp-content/uploads/2020/07/button-bw.png" alt="Logo Diversity United">
            <?php the_field('diversity_united_text'); ?>
        </div>
    </div>

 </section>



 <div class="mobile">
    <div class="top">
        <div class="img-container">
        <?php 
            $image = get_field('item_cover_image');
            if( !empty( $image ) ): ?>
                <img id="cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
    </div>
    <div class="bottom">
        <!-- <img id="target" src="http://europearchive.eu/wp-content/uploads/2020/07/target.png" alt=""> -->
        <!-- <svg id="separatorMobile" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="2" viewBox="0 0 348.661 2">
            <defs>
                <clipPath id="clip-path">
                <path id="Path_11" data-name="Path 11" d="M0,0H348.661V-2H0Z" fill="none"/>
                </clipPath>
            </defs>
            <g id="Group_14" data-name="Group 14" transform="translate(0 2)">
                <g id="Group_13" data-name="Group 13" clip-path="url(#clip-path)">
                <g id="Group_12" data-name="Group 12" transform="translate(0 -1)">
                    <path id="Path_10" data-name="Path 10" d="M0,0H348.661" fill="none" stroke="#2b2e34" stroke-width="2"/>
                </g>
                </g>
            </g>
        </svg> -->
        <div class="item-title"><h2>SEARCHING<br>EUROPEAN FLEA MARKETS<br>TO RECREATE<br>A COLLECTIVE<br>MEMORY</h2></div>
        <div class="item-location">
            <p class="travel-country"><?php the_field('travel_country'); ?></p>
            <p class="travel-date"><?php the_field('travel_date'); ?></p>
        </div>
        <div class="item-description">
            <div class="item-description">
            <?php 
                $image = get_field('item_country_icon');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
                <?php the_field('item_description'); ?>
            </div>
        </div>
    </div>
 </div>