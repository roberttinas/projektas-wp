<!-- HERO ================================================== -->
<?php
$image = get_field('hb_background_image');
// dump($image);
?>
<section class="hero" style="background-image: url(<?php echo $image['sizes']['1536x1536']; ?>);">
    <div class="overlay flex-container">
        <div class="container">
            <h1>
                <?php
                $heading = get_field('hb_section_heading');
                echo nl2br($heading);
                ?>
            </h1>
            <h4>
                <?php the_field('hb_section_description'); ?>
            </h4>
        </div>
    </div>
</section>