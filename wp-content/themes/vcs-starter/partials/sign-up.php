<!-- SIGN UP FORM ================================================== -->
<section class="sign-up">
    <div class="container">
        <?php
        $heading = get_field('sub_section_heading');
        // echo htmlspecialchars($heading);
        $heading = strip_tags($heading, '<strong>');
        // echo "<br>".htmlspecialchars($heading);
        $heading = str_replace('strong>', 'span>', $heading);
        ?>
        <h1>
            <?php echo $heading; ?>
        </h1>
        <h3>
            <?php
            $description = get_field('sub_section_description');
            echo nl2br($description);
            ?>
        </h3>
        <div class="btn-contacts">
            <?php
            if(have_rows('sub_buttons_repeater')):
                while(have_rows('sub_buttons_repeater')):
                    the_row();
                    ?>
                    <!-- HTML kuris kartojasi -->
                    <?php
                    $link = get_sub_field('buttons_link');
                    $target = $link['target'] ? ' target="_blank" ' : "";
                    ?>
                    <a href="<?php echo $link['url']; ?>" <?php echo $target; ?> class="btn-style">
                        <?php echo $link['title']; ?>
                    </a>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>