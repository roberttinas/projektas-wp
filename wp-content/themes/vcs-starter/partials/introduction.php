<!-- INTRODUCTION ================================================== -->
<section class="introduction">
    <div class="container flex-container">
        <div class="introduction-content">
            <div class="introduction-header">
                <h2>
                    <?php the_field('ib_section_heading'); ?>
                </h2>
                <h4>
                    <?php the_field('ib_section_subheading'); ?>
                </h4>
            </div>
            <p class="startup">
                <?php the_field('ib_section_description'); ?>
            </p>
            <?php
            $image = get_field('ib_section_image');
            // dump($image);
            ?>
            <img src="<?php echo $image['sizes']['1536x1536']; ?>" alt="Plant growning" class="photos">
        </div>
        <div class="introduction-benefits">
            <?php
            if(have_rows('ib_benefits_repeater')):
                while(have_rows('ib_benefits_repeater')):
                    the_row();
                    ?>
                    <div class="introduction-benefits-info flex-container">
                        <div class="benefits-icons">
                            <?php the_sub_field('icon'); ?>
                            <i class="<?php the_sub_field('icon'); ?>"></i>
                        </div>
                        <div class="benefits-features">
                            <h3 class="introduction-info-header">
                                <?php the_sub_field('heading'); ?>
                            </h3>
                            <p class="benefits">
                                <?php the_sub_field('description'); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
            <div class="benefits-features-btn">
                <?php
                $link = get_field('ib_link');
                $target = $link['target'] ? ' target="_blank" ' : "";
                ?>
                <a href="<?php echo $link['url']; ?>" <?php echo $target; ?> class="btn-style">
                    <?php echo $link['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>