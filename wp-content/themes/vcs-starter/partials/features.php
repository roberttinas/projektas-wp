<!-- FEATURES ================================================== -->
<section class="features">
    <div class="container">
        <div class="features-header">
            <h2>
                <?php the_field('fb_section_heading'); ?>
            </h2>
            <h3>
                <?php the_field('fb_section_subheading'); ?>
            </h3>
        </div>
        <div class="features-info">
            <?php
            if(have_rows('fb_features_repeater')):
                while(have_rows('fb_features_repeater')):
                    the_row();
                    ?>
                    <div class="features-info-description">
                        <div class="features-icon">
                            <?php the_sub_field('icon'); ?>
                        </div>
                        <div class="text">
                            <h3>
                                <?php the_sub_field('heading'); ?>
                                <?php the_sub_field('sub_field_heading'); ?>
                            </h3>
                            <p>
                                <?php the_sub_field('description'); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="object">
            <?php
            $link = get_field('fb_link');
            $target = $link['target'] ? ' target="_blank" ' : "";
            ?>
            <a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
                <?php echo $link['title']; ?>
            </a>
        </div>
    </div>
</section>