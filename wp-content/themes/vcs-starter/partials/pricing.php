<!-- PRICING ================================================== -->
<section class="pricing">
    <div class="container">
        <div class="pricing-header">
            <h2>
                <?php the_field('pb_section_heading'); ?>
            </h2>
            <h3>
                <?php the_field('pb_section_subheading'); ?>
            </h3>
        </div>
        <div class="pricing-info">
            <?php
            if(have_rows('pb_prices_repeater')):
                while(have_rows('pb_prices_repeater')):
                    the_row();
                    ?>
                    <div class="pricing-options">
                        <div class="options">
                            <div class="prices">
                                <h3>
                                    <?php the_sub_field('option_heading'); ?>
                                </h3>
                                <?php
                                $price = get_sub_field('price');
                                // echo htmlspecialchars($price);
                                $price = strip_tags($price, '<strong>');
                                // echo "<br>".htmlspecialchars($price);
                                $price = str_replace('strong>', 'span>', $price);
                                ?>
                                <h4>
                                    <?php echo $price; ?>
                                </h4>
                            </div>
                            <ul class="benefits">
                                <?php
                                if(have_rows('benefits_repeater')):
                                    while(have_rows('benefits_repeater')):
                                        the_row();
                                        ?>
                                        <li>
                                            <?php the_sub_field('benefit_option'); ?>
                                        </li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="btn">
                            <?php
                            $link = get_sub_field('link');
                            $target = $link['target'] ? ' target="_blank" ' : "";
                            ?>
                            <a href="<?php echo $link['url']; ?>" <?php echo $target; ?> class="btn-style">
                                <?php echo $link['title']; ?>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>