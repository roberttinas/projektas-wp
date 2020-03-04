<!-- CLIENTS ================================================== -->
<section class="clients">
    <div class="container">
        <div class="clients-header">
            <h2>
                <?php the_field('cb_section_heading'); ?>
            </h2>
            <h3>
                <?php the_field('cb_section_subheading'); ?>
            </h3>
        </div>
        <div class="clients-info flex-container">
            <div class="qmark">
                <?php the_field('cb_icon'); ?>
            </div>
            <div class="clients-header-info">
                <p class="clients-info-description">
                    <?php the_field('cb_section_description'); ?>
                </p>
                <p class="author">
                    By
                </p>
                <div class="author_name">
                    <?php the_field('cb_name_field'); ?>
                </div>
            </div>
            <div class="clients-images flex-container">
                <div class="slider-container">
                    <?php
                    if(have_rows('cb_clients_images_repeater')):
                        while(have_rows('cb_clients_images_repeater')):
                            the_row();
                            ?>
                            <!-- HTML kuris kartojasi -->
                            <div class="photo">
                                <?php
                                $image = get_sub_field('image_file');
                                // dump($image);
                                ?>
                                <img src="<?php echo $image['sizes']['clients']; ?>" alt="clients images">
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>